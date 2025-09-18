<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    
    public function __construct() {
        // examples
        $this->middleware(['permission:role-list|role-create|role-edit|role-delete'], ["only" => ["index", "show"]]);
        $this->middleware(['permission:role-create'], ["only" => ["create", "store"]]);
        $this->middleware(['permission:role-edit'], ["only" => ["edit", "update"]]);
        $this->middleware(['permission:role-delete'], ["only" => ["only", "destroy"]]);
    }

    public function index()
    {
        //
        $roles = Role::all();
        return view('auth.roles.index',compact('roles'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('auth.roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => 'required'
        ]);

        $role = Role::create(["name" => $request->name]);
        $role->syncPermissions([$request->permissions]);

        return redirect()->route('roles.index')->with('success', "Role Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $role = Role::find($id);
        return view("auth.roles.show", compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $role = Role::find($id);
        $permissions = Permission::all();
        return view("auth.roles.edit", compact("role","permissions"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "name" => "required"
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        $role->syncPermissions($request->permissions);
        return redirect()->route("roles.index")->with("success", "Role updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::find($id);
        $role->delete();

        return redirect()->route("roles.index")->with("success","Role has been deleted");
    }
}

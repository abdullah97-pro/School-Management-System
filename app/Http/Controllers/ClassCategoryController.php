<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassCategory;

class ClassCategoryController extends Controller
{
    public function __construct() {
        // examples
        $this->middleware(['permission:classCategory-list|classCategory-create|classCategory-edit|classCategory-delete'], ["only" => ["index", "show"]]);
        $this->middleware(['permission:classCategory-create'], ["only" => ["create", "store"]]);
        $this->middleware(['permission:classCategory-edit'], ["only" => ["edit", "update"]]);
        $this->middleware(['permission:classCategory-delete'], ["only" => ["only", "destroy"]]);
    }

    public function index()
    {
        //
        $classCategories = ClassCategory::all();
        return view('admin.classCategory.index',compact('classCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $classCategories = ClassCategory::all();
        // return view('admin.classCategory.create', compact('classCategories'));
        return view('admin.classCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        ClassCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', "Class Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classCategory = ClassCategory::find($id);
        return view("admin.classCategory.show", compact("classCategory"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classCategory = ClassCategory::find($id);
        return view("admin.classCategory.edit", compact("classCategory"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $classCategory = ClassCategory::find($id);

        $classCategory->name = $request->name;
        $classCategory->save();

        return redirect()->route('categories.index')->with('success', "Category Updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classCategory = ClassCategory::find($id);
        $classCategory->delete();
        
        return redirect()->route('categories.index')->with('success', "Category Deleted");

    }
}

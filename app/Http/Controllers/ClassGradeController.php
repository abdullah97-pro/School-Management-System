<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassGrade;
use App\Models\ClassCategory;

class ClassGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        // examples
        $this->middleware(['permission:classGrade-list|classGrade-create|classGrade-edit|classGrade-delete'], ["only" => ["index", "show"]]);
        $this->middleware(['permission:classGrade-create'], ["only" => ["create", "store"]]);
        $this->middleware(['permission:classGrade-edit'], ["only" => ["edit", "update"]]);
        $this->middleware(['permission:classGrade-delete'], ["only" => ["only", "destroy"]]);
    }

    public function index()
    {
        //
        // $classGrades = ClassGrade::all();
        $classGrades = ClassGrade::with('classCategory')->get();

        return view('admin.classGrade.index',compact('classGrades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $classGrades = ClassGrade::with('classCategory')->get();
        $classCategories = ClassCategory::all();

        return view('admin.classGrade.create', compact('classGrades','classCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'c_category_id' => 'required|integer|exists:class_categories,id',
            'name' => 'required',
        ]);

        $classGrade = ClassGrade::create([
            'c_category_id' => $request->c_category_id,
            'name' => $request->name,
        ]);

        return redirect()->route('grades.index')->with('success', "Class Grade Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $classGrade = ClassGrade::with('classCategory')->find($id);
        return view("admin.classGrade.show", compact("classGrade"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $classGrade = ClassGrade::find($id);
        $classCategories = ClassCategory::all();

        return view("admin.classGrade.edit", compact("classGrade","classCategories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'c_category_id' => 'required|integer|exists:class_categories,id',
            'name' => 'required',
        ]);

        $classGrade = ClassGrade::find($id);

        $classGrade->c_category_id = $request->c_category_id;
        $classGrade->name = $request->name;

        $classGrade->save();

        return redirect()->route('grades.index')->with('success', "Grade Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $classGrade = ClassGrade::find($id);
        $classGrade->delete();
        
        return redirect()->route('grades.index')->with('success', "Grade Deleted");
    }
}

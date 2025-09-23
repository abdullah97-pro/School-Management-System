<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassCategoryController;
use App\Http\Controllers\ClassGradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\PermissionController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student/dashboard', [App\Http\Controllers\HomeController::class, 'studentDashboard'])->name('studentDashboard');
 
Route::resource('users', UserController::class);

Route::resource('class/categories', ClassCategoryController::class);
Route::resource('class/grades', ClassGradeController::class);
Route::resource('subjects', SubjectController::class);

Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);

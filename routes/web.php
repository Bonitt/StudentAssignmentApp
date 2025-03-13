<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// This route is to view the colleges
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');

// This route is to show an individual college
Route::get('/colleges/{id}', [CollegeController::class, 'show'])->name('colleges.show');

// This route is to create a college
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');

// This route is to edit a college
Route::put('/colleges/{id}', [CollegeController::class, 'update'])->name('colleges.update');

Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');

// This route is to delete a college
Route::delete('/colleges/{id}', [CollegeController::class, 'destroy'])->name('colleges.destroy');

// This route is to view the students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// This route is to show an individual student
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// This route is to create a student
Route::get('/students/create', action: [StudentController::class, 'create'])->name('students.create');

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

// This route is to edit a student
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

// This route is to delete a student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
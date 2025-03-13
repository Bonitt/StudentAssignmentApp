<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('college')->get(); 
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function show($id) {
        $students = Student::find($id);
        return view('students.show', compact('students')); 
    }

    public function edit($id){
        $student = Student::find($id);
        $colleges = College::orderBy('name')->pluck('name', 'id');
        return view('students.edit', compact('student', 'colleges'));
    }

    public function update($id, Request $request) {
        $students = Student::find($id);
        $students->update($request->all());
        return redirect()->route('students.index');
    }

}

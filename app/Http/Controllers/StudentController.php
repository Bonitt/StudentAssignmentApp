<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $college_id = $request->input('college_id');

        $colleges = College::pluck('name', 'id');

        $students = Student::with('college')
            ->when($college_id, function ($query, $college_id) {
                return $query->where('college_id', $college_id);
            })
            ->get();

        return view('students.index', compact('students', 'colleges'));
    }


    public function create()
    {
        $student = new Student(); 
        $colleges = College::orderBy('name')->pluck('name', 'id');
        return view('students.create', compact('student', 'colleges'));
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email', 
            'phone' => 'required|regex:/^\d{8}$/', 
            'dob' => 'required|date',  
            'college_id' => 'required|exists:colleges,id',  
        ]);
        
    
        Student::create($request->all());
        return redirect()->route('students.index')->with('message', 'Student has been added successfully');
    }
    

}

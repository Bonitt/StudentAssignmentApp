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
        
        // Get the sort and direction query parameters from the request
        $sort = $request->input('sort', 'name'); 
        $direction = $request->input('direction', 'asc'); 

        $colleges = College::pluck('name', 'id');

        // Get all students and their respective college and displays them in a view
        $students = Student::with('college')
            ->when($college_id, function ($query, $college_id) {
                return $query->where('college_id', $college_id);
            })
            ->orderBy($sort, $direction) 
            ->get();

        return view('students.index', compact('students', 'colleges'));
    }




    public function create()
    {
        // Returns the view to create a new student
        $student = new Student(); 
        $colleges = College::orderBy('name')->pluck('name', 'id');
        return view('students.create', compact('student', 'colleges'));
    }



    public function show($id) {
        // Get a single student and returns a view
        $students = Student::find($id);
        return view('students.show', compact('students')); 
    }

    public function edit($id){
        // Get a single student and returns a view to edit it
        $student = Student::find($id);
        $colleges = College::orderBy('name')->pluck('name', 'id');
        return view('students.edit', compact('student', 'colleges'));
    }

    public function store(Request $request)
    {
        // Validate the request making sure all fields are filled, the email is unique,
        // the phone number is 8 digits long, college exists and the dob is a date format
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email', 
            'phone' => 'required|regex:/^\d{8}$/', 
            'dob' => 'required|date',  
            'college_id' => 'required|exists:colleges,id',  
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function update($id, Request $request)
    {
        // Updates a single student and returns a view to edit it
        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy($id)
    {
        // Deletes a single student and redirects to the index page
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
class CollegeController extends Controller
{
    
    public function index()
    {
        // Get all colleges and returns a view
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    public function show($id) {
        // Get a single college and returns a view
        $colleges = College::find($id);
        return view('colleges.show', compact('colleges')); 
    }

    public function edit($id){
        // Get a single college and returns a view to edit it
        $college = College::find($id);
        return view('colleges.edit', compact( 'college'));
    }

    public function update($id, Request $request) {
        // Update a single college and returns a view to edit it
        $college = College::find($id);
        // Update the college with the new data from the request
        $college->update($request->all());
        return redirect()->route('colleges.index')->with('message', 'College updated successfully');
    }

    public function create()
    {
        // Returns the view to create a new college
        $college = new College(); 
        return view('colleges.create', compact('college'));
    }

    
    public function store(Request $request)
    {
        // Validate the request making sure all fields are filled and the name is unique
        $request->validate([
            'name' => 'required|unique:colleges',
            'address' => 'required', 
        ]);
        // Create a new college with the request data and redirect to the index page
        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully');
    }
    
    public function destroy($id){
        // Delete a single college and redirect to the index page
        $college = College::find($id);
        $college->delete();
        return redirect()->route('colleges.index')->with('message', 'College deleted successfully');
    }
    
    
}

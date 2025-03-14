<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    public function show($id) {
        $colleges = College::find($id);
        return view('colleges.show', compact('colleges')); 
    }

    public function edit($id){
        $college = College::find($id);
        return view('colleges.edit', compact( 'college'));
    }

    public function update($id, Request $request) {
        $college = College::find($id);
        $college->update($request->all());
        return redirect()->route('colleges.index')->with('message', 'College updated successfully');
    }

    public function create()
    {
        $college = new College(); 
        return view('colleges.create', compact('college'));
    }


    
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colleges',
            'address' => 'required', 
        ]);
    
        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully');
    }
    
    public function destroy($id){
        $college = College::find($id);
        $college->delete();
        return redirect()->route('colleges.index')->with('message', 'College deleted successfully');
    }
    
    
}

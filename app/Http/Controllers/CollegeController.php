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
        $colleges = College::find($id);
        $colleges->update($request->all());
        return redirect()->route('colleges.index');
    }
}

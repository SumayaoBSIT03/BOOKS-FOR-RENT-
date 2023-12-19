<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $author = Author::orderBy('id')->get();
        return view('author.index', ['authors'=> $author]);
    }


    public function create(){
        return view('author.create');
    }

    public function store(Request $request) {

        $request->validate([
            'full_name' => 'required',
            'pen_name' => 'required',
            'age' => 'required|numeric'
        ]);

        Author::create([
            'full_name' => $request->full_name,
            'pen_name' => $request->pen_name,
            'age' => $request->age
        ]);

        return redirect('/authors')->with('message', 'A new author has been added to the list');
        
    }

    public function edit(Author $author) {

        return view('author.edit',compact('author'));
    }

    public function update(Author $author, Request $request) {
        
        $request->validate([
            'full_name' => 'required',
            'pen_name' => 'required',
            'age' => 'required|numeric'
        ]);

        $author->update($request->all());
        return redirect('/authors')->with('message', " $author->full_name has been updated successfully");
    }

    public function delete(Author $author) {
        
        $author->delete();

        return redirect('/authors')->with('message', " $author->full_name has been deleted");
    }
}

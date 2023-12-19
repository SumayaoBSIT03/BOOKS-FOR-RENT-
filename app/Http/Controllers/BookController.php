<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = Book::orderBy('id')->get();
        return view('book.index', ['books'=> $book]);
    }


    public function create(){
        $authors = Author::list();
        return view('book.create', ['authors' => $authors]);
    }

    public function store(Request $request) {

        $request->validate([
            'author_id' => 'required|numeric',
            'title' => 'required',
            'genre' => 'required',
        ]);

        Book::create([
            'author_id' => $request->author_id,
            'title' => $request->title,
            'genre' => $request->genre,
        ]);

        return redirect('/books')->with('message', 'A new book has been added to the list');

    }

    public function edit(Book $book) {
        $authors = Author::list();
        return view('book.edit',['authors' => $authors], compact('book'));
    }

    public function update(Book $book, Request $request) {

        $request->validate([
            'title' => 'required',
            'genre' => 'required',
        ]);

        $book->update($request->all());
        return redirect('/books')->with('message', " $book->title has been updated successfully");
    }

    public function delete(Book $book) {

        $book->delete();

        return redirect('/books')->with('message', " $book->title has been deleted");
    }
}

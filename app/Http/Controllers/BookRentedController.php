<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\Author;
use App\Models\Book;
use App\Models\BookRented;
use Illuminate\Http\Request;

class BookRentedController extends Controller
{
    public function index(){
        $bookRented = BookRented::orderBy('id')->get();
        return view('bookRented.index', ['bookRenteds'=> $bookRented]);
    }


    public function create(){
        $customers = Customer::list();
        $books = Book::list();
        return view('bookRented.create', ['books' => $books, 'customers' => $customers]);
    }

    public function store(Request $request) {

        $request->validate([
            'book_id' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'date_rented' => 'required|date',
            'date_returned' => 'required|date'
        ]);

        BookRented::create([
            'book_id' => $request->book_id,
            'customer_id' => $request->customer_id,
            'date_rented' => $request->date_rented,
            'date_returned' => $request->date_returned
        ]);

        return redirect('/bookRenteds')->with('message', 'A new bookRented has been added to the list');

    }

    public function edit(BookRented $bookRented) {
        $customers = Customer::list();
        $books = Book::list();
        return view('bookRented.edit',['books' => $books, 'customers' => $customers], compact('bookRented'));
    }

    public function update(BookRented $bookRented, Request $request) {

        $request->validate([
            'date_rented' => 'required|date',
            'date_returned' => 'required|date'
        ]);

        $bookRented->update($request->all());
        return redirect('/bookRenteds')->with('message', " $bookRented->id has been updated successfully");
    }

    public function delete(BookRented $bookRented) {

        $bookRented->delete();

        return redirect('/bookRenteds')->with('message', " $bookRented->id has been deleted");
    }
}

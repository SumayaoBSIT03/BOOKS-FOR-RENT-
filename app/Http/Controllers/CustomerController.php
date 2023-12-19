<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(){
        $customer = Customer::orderBy('id')->get();
        return view('customer.index', ['customers'=> $customer]);
    }


    public function create(){
        return view('customer.create');
    }

    public function store(Request $request) {

        $request->validate([
            'full_name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'hobby' => 'required'
        ]);

        Customer::create([
            'full_name' => $request->full_name,
            'age' => $request->age,
            'email' => $request->email,
            'hobby' => $request->hobby
        ]);

        return redirect('/customers')->with('message', 'A new customer has been added to the list');
        
    }

    public function edit(Customer $customer) {

        return view('customer.edit',compact('customer'));
    }

    public function update(Customer $customer, Request $request) {
        
        $request->validate([
            'full_name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'hobby' => 'required'
        ]);

        $customer->update($request->all());
        return redirect('/customers')->with('message', " $customer->full_name has been updated successfully");
    }

    public function delete(Customer $customer) {
        
        $customer->delete();

        return redirect('/customers')->with('message', " $customer->full_name has been deleted");
    }
}

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookRentedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers/create', [CustomerController::class, 'store']);
Route::get('/customers/{customer}', [CustomerController::class, 'edit']);
Route::post('/customers/{customer}', [CustomerController::class, 'update']);
Route::delete('/customers/delete/{customer}', [CustomerController::class, 'delete']);


// Route::get('/users/create', [UsersController::class, 'create']);
// Route::post('/users/create', [UsersController::class, 'store']);
// Route::get('/users/{user}', [UsersController::class, 'edit']);
// Route::post('/users/{user}', [UsersController::class, 'update']);

// Route::delete('/users/delete/{user}', [UsersController::class, 'delete']);


Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('/authors/create', [AuthorController::class, 'store']);
Route::get('/authors/{author}', [AuthorController::class, 'edit']);
Route::post('/authors/{author}', [AuthorController::class, 'update']);
Route::delete('/authors/delete/{author}', [AuthorController::class, 'delete']);


Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/create', [BookController::class, 'store']);
Route::get('/books/{book}', [BookController::class, 'edit']);
Route::post('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/delete/{book}', [BookController::class, 'delete']);


Route::get('/bookRenteds', [BookRentedController::class, 'index'])->name('BookRenteds');
Route::get('/bookRenteds/create', [BookRentedController::class, 'create']);
Route::post('/bookRenteds/create', [BookRentedController::class, 'store']);
Route::get('/bookRenteds/{bookRented}', [BookRentedController::class, 'edit']);
Route::post('/bookRenteds/{bookRented}', [BookRentedController::class, 'update']);
Route::delete('/bookRenteds/delete/{bookRented}', [BookRentedController::class, 'delete']);

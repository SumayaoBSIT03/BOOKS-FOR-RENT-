<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRented extends Model
{
    use HasFactory;


    protected $fillable = ['book_id', 'customer_id','date_rented','date_returned'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public static function list() {

        $bookRenteds = BookRented::orderByRaw('date_rented')->get();
        $list = [];
        foreach ($bookRenteds as $bookRented) {
            $list[$bookRented->id] = $bookRented->date_rented;
        }
        return $list;
    }



}

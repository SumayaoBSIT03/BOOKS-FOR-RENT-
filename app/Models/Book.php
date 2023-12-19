<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['author_id','title', 'genre'];

    public function bookRenteds(){
        return $this->hasMany(BookRented::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public static function list() {

        $books = Book::orderByRaw('id')->get();
        $list = [];
        foreach ($books as $book) {
            $list[$book->id] = $book->title;
        }
        return $list;
    }
}

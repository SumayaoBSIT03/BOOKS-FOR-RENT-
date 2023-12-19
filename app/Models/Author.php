<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['full_name','pen_name','age'];

    public function books(){
        return $this->hasMany(Book::class);
    }

    public static function list() {

        $authors = Author::orderByRaw('id')->get();
        $list = [];
        foreach ($authors as $author) {
            $list[$author->id] = $author->full_name;
        }
        return $list;
    }

}

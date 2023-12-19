<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['full_name','age','email','hobby'];

    public function bookRenteds(){
        return $this->hasMany(BookRented::class);
    }

    public static function list() {

        $customers = Customer::orderByRaw('id')->get();
        $list = [];
        foreach ($customers as $customers) {
            $list[$customers->id] = $customers->full_name;
        }
        return $list;
    }
}

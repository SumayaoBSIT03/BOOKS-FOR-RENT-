<?php

namespace Database\Seeders;

use App\Models\BookRented;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookRentedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookRented::factory(20)->create();
    }
}

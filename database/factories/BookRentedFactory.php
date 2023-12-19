<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookRented>
 */
class BookRentedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id'       =>fake()->randomElement(Book::pluck('id')->all()),
            'customer_id'       =>fake()->randomElement(Customer::pluck('id')->all()),
            'date_rented'   =>fake()->dateTime(),
            'date_returned' =>fake()->dateTime()
        ];
    }
}

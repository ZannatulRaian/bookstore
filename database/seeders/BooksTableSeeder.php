<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 1550; $i++) { // 500 books for testing pagination
            Book::create([
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'isbn' => $faker->isbn13,
                'price' => $faker->randomFloat(2, 5, 100),
                'stock' => $faker->numberBetween(0, 100),
            ]);
        }
    }
}
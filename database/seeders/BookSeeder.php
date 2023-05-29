<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 9; $i++) {
            Book::create([
                'name' => "Moon Dance$i",
                'author' => "Build real app",
                'slug' => Str::slug('Moon Dance'),
                'image_name' => "product$i.jpg",
                'price' => 10.00 * $i
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Erotica', 'Calendars, Diaries & Annuals', 'Children Books', 'Comics & Graphic Novels', 'Education Studies & Teaching'];
        foreach ( $categories as $category ) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tShirt = Category::create([
            'name' => 'T-Shirt',
            'slug' => 't-shirt',
        ]);

        $tShirt->children()->createMany([
            [
                'name' => 'Short Sleeves',
                'slug' => 'short-sleeves',
            ], [
                'name' => 'Long Sleeves',
                'slug' => 'long-sleeves',
            ],
        ]);

        Category::create([
            'name' => 'Miscellaneous',
            'slug' => 'miscellaneous',
        ]);
    }
}

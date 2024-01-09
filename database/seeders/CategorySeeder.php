<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            [
                'name' => 'Construction',
                'slug' => 'construction',
            ],
            [
                'name' => 'Gardening',
                'slug' => 'gardening',
            ],
            [
                'name' => 'Wood',
                'slug' => 'wood',
            ],
        ];

        Category::insert($categories);

    }
}

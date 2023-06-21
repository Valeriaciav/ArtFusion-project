<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ([

            ['name'=>'Musica'],
            ['name'=>'Teatro'],
            ['name'=>'Scultura'],
            ['name'=>'Pittura'],
            ['name'=>'Fotografia'],
            ['name'=>'Cinema']
            ]
        );

        foreach($categories as $category){
            Category::updateOrCreate($category);
        }
    }
}

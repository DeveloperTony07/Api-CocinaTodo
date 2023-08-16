<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['category' => "Breakfast"]);
        Category::create(['category' => "Drinks"]);
        Category::create(['category' => "Lunch"]);
        Category::create(['category' => "Desserts"]);
        Category::create(['category' => "Soups"]);
        Category::create(['category' => "Entrees"]);
    }
}

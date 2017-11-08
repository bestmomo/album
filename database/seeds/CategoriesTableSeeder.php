<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name' => 'Paysages',
            'slug' => 'paysages',
        ]);

        Category::create([
            'name' => 'Maisons',
            'slug' => 'maisons',
        ]); 

        Category::create([
            'name' => 'Personnages',
            'slug' => 'personnages',
        ]); 

        Category::create([
            'name' => 'Animaux',
            'slug' => 'animaux',
        ]); 

        Category::create([
            'name' => 'Végétation',
            'slug' => 'vegetation',
        ]);

    }
}
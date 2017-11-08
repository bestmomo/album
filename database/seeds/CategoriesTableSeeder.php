<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        Category::insert([
        [
            'name' => 'Paysages',
            'slug' => 'paysages',
        ],[
            'name' => 'Maisons',
            'slug' => 'maisons',
        ],[
            'name' => 'Personnages',
            'slug' => 'personnages',
        ],[
            'name' => 'Animaux',
            'slug' => 'animaux',
        ],[
            'name' => 'Végétation',
            'slug' => 'vegetation',
        ]]);

    }
}
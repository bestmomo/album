<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Paysages',
                'slug' => 'paysages',
                'created_at' => '2017-11-03 15:37:26',
                'updated_at' => '2017-11-03 15:37:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Maisons',
                'slug' => 'maisons',
                'created_at' => '2017-11-03 15:37:26',
                'updated_at' => '2017-11-03 15:37:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Personnages',
                'slug' => 'personnages',
                'created_at' => '2017-11-03 15:37:26',
                'updated_at' => '2017-11-03 15:37:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Animaux',
                'slug' => 'animaux',
                'created_at' => '2017-11-03 15:37:26',
                'updated_at' => '2017-11-03 15:37:26',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Végétation',
                'slug' => 'vegetation',
                'created_at' => '2017-11-03 15:37:26',
                'updated_at' => '2017-11-03 15:37:26',
            ),
        ));
        
        
    }
}
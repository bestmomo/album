<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * Test add category.
     *
     * @return void
     */
    public function testAddCategory()
    {
        $this->auth(1);

        $this->get('/category/create')
            ->assertSee('Name');

        $response = $this->post('/category', [
            'name' => 'Une catégorie',
        ]);

        $this->assertDatabaseHas('categories', [
            'name' => 'Une catégorie',
            'slug' => 'une-categorie',
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url('/'));
    }

    /**
     * Test update category.
     *
     * @return void
     */
    public function testUpdateCategory()
    {
    	$this->auth(1);

        $this->get('/category/2/edit')
            ->assertSee('Maisons');

        $response = $this->put('/category/2', [
            'name' => 'Immeubles',
        ]);

        $this->assertDatabaseHas('categories', [
            'name' => 'Immeubles',
        ]);

        $this->assertDatabaseMissing('categories', [
            'name' => 'Maisons',
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url('/'));
    }

    /**
     * Add category fail validation test.
     *
     * @return void
     */
    public function testAddCategoryFail()
    {
        $this->auth(1);

        // Required
        $response = $this->post('/category');
        $response->assertSessionHasErrors('name');

        // Unique
        $response = $this->post('/category', [
            'name' => 'Maisons',
        ]);
        $response->assertSessionHasErrors('name');

        // Max length
        $response = $this->post('/category', [
            'name' => str_random(256),
        ]);
        $response->assertSessionHasErrors('name');

        // String
        $response = $this->post('/category', [
            'name' => 256,
        ]);
        $response->assertSessionHasErrors('name');
    }

    /**
     * Update category fail validation test.
     *
     * @return void
     */
    public function testUpdateCategoryFail()
    {
        $this->auth(1);

        // Required
        $response = $this->put('/category/2');
        $response->assertSessionHasErrors('name');

        // Unique
        $response = $this->put('/category/2', [
            'name' => 'Animaux',
        ]);
        $response->assertSessionHasErrors('name');

        // Max length
        $response = $this->put('/category/2', [
            'name' => str_random(256),
        ]);
        $response->assertSessionHasErrors('name');

        // String
        $response = $this->put('/category/2', [
            'name' => 256,
        ]);
        $response->assertSessionHasErrors('name');
    }

    /**
     * Test delete category.
     *
     * @return void
     */
    public function testDeleteCategory()
    {
        $this->auth(1);

        $response = $this->delete('/category/1');

        $this->assertDatabaseMissing('categories', [
            'name' => 'Paysages',
        ]);

        $response->assertStatus(200); 
    }
}

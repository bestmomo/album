<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageTest extends TestCase
{
    /**
     * Test add image.
     *
     * @return void
     */
    public function testAddImage()
    {
        $this->auth(2);

        $this->get('/')
            ->assertSee('Add an image');

        $this->get('/image/create')
            ->assertSee('Description');

        Storage::fake('images');
        Storage::fake('thumbs');

        $response = $this->post('/image', [
            'image' => UploadedFile::fake()->image('paysage.jpg'),
            'category_id' => 2,
            'description' => 'un beau paysage',
        ]);

        $this->assertDatabaseHas('images', [
            'description' => 'un beau paysage',
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url('/image/create'));
    }

    /**
     * Image fail validation test.
     *
     * @return void
     */
    public function testImageFail()
    {
        $this->auth(2);

        // Unique
        $response = $this->post('/image');
        $response->assertSessionHasErrors(['image', 'category_id']);

        // Image
        $response = $this->post('/image', [
            'image' => 'texte',
        ]);
        $response->assertSessionHasErrors('image');

        // Max
        $response = $this->post('/image', [
            'image' => UploadedFile::fake()->image('paysage.jpg')->size(2001),
            'description' => str_random(256),
        ]);
        $response->assertSessionHasErrors(['image', 'description']);

        // Exists
        $response = $this->post('/image', [
            'category_id' => 10,
        ]);
        $response->assertSessionHasErrors('category_id');
    }

    /**
     * Test delete image.
     *
     * @return void
     */
    public function testDeleteImage()
    {
        $this->auth(1);

        $response = $this->delete('/image/20');

        $this->assertDatabaseMissing('images', [
            'id' => 20,
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url('/'));
    }
}

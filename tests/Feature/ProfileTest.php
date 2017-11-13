<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    /**
     * Profile test.
     *
     * @return void
     */
    public function testProfile()
    {
        $this->auth(2);

        $this->get('/')
            ->assertSee('Profile');

        $response = $this->put('/profile/2', [
            'email' => 'martin@chezlui.fr',
            'pagination' => 12,
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'martin@chezlui.fr',
            'settings' => '{"pagination":12}',
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url('/'));
    }

    /**
     * Profile fail validation test.
     *
     * @return void
     */
    public function testProfileFail()
    {
        $this->auth(2);

        // Required
        $response = $this->put('/profile/2');
        $response->assertSessionHasErrors(['email', 'pagination']);

        // Email
        $response = $this->put('/profile/2', [
            'email' => 'nom@o',
        ]);
        $response->assertSessionHasErrors('email');

        // Max
        $response = $this->put('/profile/2', [
            'email' => str_random(250) . '@ici.fr',
        ]);
        $response->assertSessionHasErrors('email');

        // Unique
        $response = $this->put('/profile/2', [
            'email' => 'durand@chezlui.fr',
        ]);
        $response->assertSessionHasErrors('email');
    }  
}

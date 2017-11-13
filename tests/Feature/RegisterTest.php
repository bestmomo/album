<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * Register test.
     *
     * @return void
     */
    public function testRegister()
    {
        $data = [
            'name' => 'Martin',
            'email' => 'martin@chezlui.fr',
            'password' => 'martinus',
            'password_confirmation' => 'martinus',
        ];

        $response = $this->post('/register', $data);

        $this->assertDatabaseHas('users', [
            'name' => 'Martin',
            'email' => 'martin@chezlui.fr',
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url('/'));

        $this->get('/')->assertSee('Profile');
    }

    /**
     * Register fail validation test.
     *
     * @return void
     */
    public function testRegisterFail()
    {
        $response = $this->post('/register');

        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }
}

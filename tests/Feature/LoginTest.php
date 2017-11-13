<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * Login and Logout test.
     *
     * @return void
     */
    public function testLoginLogout()
    {
        $response = $this->post('/login', [
            'email' => 'dupont@chezlui.fr',
            'password' => 'user',
        ]);

        $this->get('/')->assertSee('Logout');

        $this->post('/logout');

        $this->get('/')->assertSee('Login');
    }

    /**
     * Login fail validation test.
     *
     * @return void
     */
    public function testLoginFail()
    {
        $response = $this->post('/login');

        $response->assertSessionHasErrors('email');
    }
}

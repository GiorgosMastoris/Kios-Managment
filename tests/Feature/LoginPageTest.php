<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUSerRedirectWithNoLogin()
    {
        $response = $this->get('/login');

        $response->assertRedirect(route('login'));
    }
}

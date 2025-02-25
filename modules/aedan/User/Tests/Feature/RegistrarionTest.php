<?php

namespace aedan\User\Tests\Feature;

use aedan\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use function route;

class RegistrarionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_see_register_form()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }

    public function test_user_can_register()
    {
        $this->withoutExceptionHandling();
        $response = $this->post(route('register') , [
            'name' => 'HMN',
            'email' => 'hemn791@gmail.com',
            'mobile' => '9367853698',
            'password' => 'As25@#3743',
            'password_confirmation' => 'As25@#373',
        ]);
        $response->assertRedirect(route('home'));
        $this->assertCount(1, User::all());
    }

}

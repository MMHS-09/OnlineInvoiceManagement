<?php

namespace Tests\Unit;

use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogIn extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    //     public function test_user_can_log_in() {
    
    //         $response = $this->get('/user')
    //         ->assertRedirect('/login');
        
    // }

    public function test_authenticated_users() {

        $this->actingAs(factory(User::class)->create());
        $response = $this->get('/')
            ->assertOk();
    }
}

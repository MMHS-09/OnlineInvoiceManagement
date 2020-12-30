<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModelTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_has_full_name_attribute()
    {
        // $this->assertTrue(true);
        $user = new User();
        

        // $user = User::create(['name'=>'Hasan','email'=>'shawon@gmail.com','password'=>123]);

        $this->assertEquals('Md. Mehedi Hasan Shawon', $user->fullname);
    }
}

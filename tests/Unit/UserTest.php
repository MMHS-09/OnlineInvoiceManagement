<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase {

    public function test_get_first_name() {

        $user = new User();

        $user->setFirstName('Sumaiya');

        $this->assertEquals($user->getFirstName(),'Sumaiya');

        
    }

    public function test_get_last_name() {

        $user = new User();
        $user->setLastName('Akter');

        $this->assertEquals($user->getLastName(),'Akter');
    }

    public function testFullNameIsReturned () {

        $user= new User();

        $user->setFirstName('Md. Mehedi Hasan');
        $user->setLastName('Shawon');

        $this->assertEquals($user->getFullName(),'Md. Mehedi Hasan Shawon');
    }

    public function testEmailAddressCanBeSet() {

        $user = new User();
        $user->setEmail('shawon@gmail.com');

        $this->assertEquals($user->getEmail(), 'shawon@gmail.com');
    }

}
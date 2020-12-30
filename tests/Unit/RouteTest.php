<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testRoute () {

        $response = $this->get('/about');

        // dd($response);

        $response->assertSee('About');
    }

}

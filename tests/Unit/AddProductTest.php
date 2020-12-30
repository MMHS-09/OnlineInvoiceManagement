<?php

namespace Tests\Unit;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_product_can_be_added_to_the_company()
    {
        $this->withoutExceptionHandling();
        // $this->assertTrue(true);
        $this->post('/product',[
            'title'=>'TV',
            'company'=>'walton',
        ]);
        // $response->asserOk();

        $this->assertCount(1 ,Product::all());

    }
}
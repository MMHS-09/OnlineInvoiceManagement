<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaymentGateWay extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testPayment () {

        $response = $this->get('/PaymentGateWay');

        // dd($response);

        $response->assertSee('PaymentPortal');
    }

}

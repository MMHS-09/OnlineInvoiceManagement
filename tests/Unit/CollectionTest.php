<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Collection extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_empty_instantiated_collection_returns_no_items()
    {
       $collection = new \App\Support\Collection;

       $this->assertEmpty($collection->get());
    }

    public function test_count_is_correct_for_items_passed_in() {

        $collection = new \App\Support\Collection ([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3, $collection->count());
    }

    public function test_items_returned_match_items_passed_in() {

        $collection = new \App\Support\Collection([
            'one','two','three'
        ]);

        $this->assertCount(3,$collection->get());
        $this->assertEquals($collection->get()[0], 'one');
        $this->assertEquals($collection->get()[1], 'two');

    }

    // public function test_collection_is_instance_of_iterator_aggregate() {
    //     $collection = new \App\Support\Collection();
    //     $this->assertInstanceOf(IteratorAggregate::class, $collection);
    // }


}

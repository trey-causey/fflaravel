<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SandboxTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function this_is_a_sandbox_test()
    {
        $this->withoutExceptionHandling();
        $attributesForTable = [
            'name' => $this->faker->word
        ];
        $this->post('/scoring/index',$attributesForTable);
        //$this->get('scoring/index',$attributesForTable);

        $this->assertDatabaseHas('test',$attributesForTable);

        //$this->get('/scoring/index')->assertSee($attributesForTable['raceId']);
    }
}

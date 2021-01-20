<?php

namespace Tests\Unit;

use App\Models\Utilities\PointValues;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PointValuesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function it_tests_adding_a_pointsValue()
    {
        $value = PointValues::create(
            ['rankValue' => '1',
            'category' => 'race',
            'pointValue' => 25]
        );

        $this->assertDatabaseHas('pointvalues',
            ['rankValue' => '1',
            'category' => 'race',
            'pointValue' => 25]);
    }

    function add_pointvalues()
    {

    }
}

<?php namespace Tests\Feature;

use App\Models\Stats\DriverStats;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DriverStatsTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function test_create()
    {
        $dsObj = new DriverStats();
        $statline = DriverStats::create(
            [
                'raceId' => 1031
            ]);

        $test = [
            'driverId' => 822
        ];
        //$dsObj->addCalc($test);

        $this->assertDatabaseHas('driverstats',['raceId' => '1031']);
    }

/** @test  */
    public function test_adding_a_stat()
    {
        //$statline = new DriverStats();

        $statline = DriverStats::create(
            ['raceId' => 1031,
            'driverId' =>    1,
                'constructorId' => 131
        ]);

    }

    public function testAddCalculation()
    {
        $this->assertTrue(true);
    }
}

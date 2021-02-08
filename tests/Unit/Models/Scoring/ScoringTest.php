<?php namespace Tests\Unit\Models\Scoring;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ScoringTest extends TestCase {
    use WithFaker;

    /** @test */
    public function it_tests_something() {
        $this->withoutExceptionHandling();
        $attributesForTable = [
            'raceId' => $this->faker->numberBetween(1031, 1041)
        ];

        $this->assertDatabaseHas('draftpicks',$attributesForTable);

        $this->get('/scoring/index')->assertSee($attributesForTable['raceId']);
    }
}

<?php namespace Tests\Unit\Models\clients;

use App\Models\Clients\TeamManager;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class TeamManagerTest extends TestCase {
    use WithFaker;
    use RefreshDatabase;
    //use DatabaseMigrations;

    /** @test  */
    public function a_simple_test() {
        $this->withoutExceptionHandling();
        $attributesForTable = [
            'teamOwnerId' => 1
        ];
        $this->assertDatabasehas('teammanagers',$attributesForTable);
    }
    /** @test */
    public function a_get_test() {
    $aft = [
        'teamOwnerId' => 1,
        'firstName' => 'trey',
        'lastName' => 'causey',
        'dob' => '03-03-1999',
        'handle' => 'xxx'
    ];
    $this->get('teamManagers/index', $aft);
    $this->assertDatabaseHas('teammanagers', $aft);
    }
    /** @test  */
    public function a_post_test() {
        $this->withoutExceptionHandling();
        $attributesForTable = [
            'teamOwnerId' => $this->faker->numberBetween(1,1)
        ];
    $this->post('teamManagers/index', $attributesForTable);
    $this->assertDatabaseHas('teammanagers', $attributesForTable);
    }

    /** @test */
    public function a_user_can_create_teammanagers() {
        $this->withoutExceptionHandling();

        $attributes = [
            'teamOwnerId' => 1,
            'firstName' => 'trey',
            'lastName' => 'causey',
            'dob' => '03-03-1999',
            'handle' => 'xxx'
        ];
        $this->post('/teamManagers/index', $attributes)->assertRedirect('/teamManagers/index');

        $this->assertDatabaseHas('teammanagers', $attributes);

        $this->get('/teamManagers/index')->assertSee($attributes['teamOwnerId']);
    }
    /** @test  */
    public function seeder_test() {
        $this->seed(\TeammanagersTableSeeder::class);
    }
}

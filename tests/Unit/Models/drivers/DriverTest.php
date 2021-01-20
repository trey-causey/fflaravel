<?php namespace Tests\Unit;

use App\Models\Person\Driver;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class DriverTest extends TestCase
{
    use RefreshDatabase;

    function it_shows_drivers()
    {
        //given

        //when
        $this->artisan();
        //then

    }

}

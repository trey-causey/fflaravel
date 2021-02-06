<?php

namespace Tests\Unit;

use App\Models\Imports\Ergast\ErgastDefaultImport;
use PHPUnit\Framework\TestCase;

class ErgastDefaultImportTest extends TestCase
{
    /**
     * @test
     * @dataProvider yearProvider
     */
    public function testGetRoundsBySeason()
    {

    }

    public function yearProvider()
    {
        return [
            [2020,]
        ];
    }
}

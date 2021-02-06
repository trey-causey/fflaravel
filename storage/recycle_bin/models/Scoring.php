<?php

namespace App\Utilities;
require 'vendor/autoload.php';

use App\Teamowner;
use App\Stats;
use GuzzleHttp\Client;

class Scoring {
const IT = 2;

private $driverPosition = [
    1 => 25,
    2 => 18,
    3 => 15,
    4 => 12,
    5 => 10,
    6 => 8,
    7 => 6,
    8 => 4,
    9 => 2,
    10 => 1
];
    public function calculatePoints()
    {
        $to = new Teamowner();
        //add points based on driver position
        addNewDriverPoints();

    }

    public function addNewDriverPoints()
    {
        $beginningPoints = 100;
        $client = new Client(['base_url' => 'https://ergast.com/api/f1/current/last/results']);

    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DraftPicks extends Model
{
    protected $table = 'draftpicks';
    protected $pickOrderArray = [];

    public function GetOrderByRaceId(int $raceId) {
        $data = DB::table('draftpicks')
            ->where('raceId', $raceId)
            ->orderBy('pickOrder')
            ->get();
        foreach ($data as $number) {
            $test = json_decode($number->teamOwnerId);
            array_push($this->pickOrderArray,$test);
        }

    }

}

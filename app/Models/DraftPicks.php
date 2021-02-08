<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DraftPicks extends Model
{
    protected $table = 'draftpicks';
    protected $pickOrderArray = [];

    public static function ShowDraftPicksTableByRace($raceId)
    {
        $variable = [$raceId];
        $draftPicksSQL = DB::select('SELECT tm.handle AS "handle", d1.code AS "primary", d2.code AS "secondary", d3.code AS "turbo"
                                            FROM draftpicks dp
                                            JOIN teammanagers tm ON tm.teamOwnerId = dp.teamOwnerId
                                            JOIN drivers d1 ON d1.driverId = dp.primaryDriverId
                                            JOIN drivers d2 ON d2.driverId = dp.secondaryDriverId
                                            JOIN drivers d3 ON d3.driverId = dp.turboDriverId
                                            WHERE raceId = ?
                                            ORDER BY pickOrder', $variable);
        return $draftPicksSQL;
    }

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

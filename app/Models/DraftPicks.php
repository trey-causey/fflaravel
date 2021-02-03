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
        $draftPicksSQL = DB::select('SELECT tm.handleName AS "handle", d1.code AS "primary", d2.code AS "secondary", d3.code AS "turbo"
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

    public static function ShowPicksByRace($race) {
        $primaryDraftPicksSQL = DB::select('SELECT dd.code AS "Primary Driver"
                            FROM draftable_drivers dd
                            JOIN draftpicks dp
                            ON dd.driverId = dp.primaryDriverId
                            WHERE raceId = "1031"');
        $secondaryDraftPicksSQL = DB::select('SELECT dd.code AS "Secondary Driver"
                            FROM draftable_drivers dd
                            JOIN draftpicks dp
                            ON dd.driverId = dp.secondaryDriverId
                            WHERE raceId = "1031"');
        $turboDraftPicksSQL = DB::select('SELECT dd.code AS "Turbo Driver"
                            FROM draftable_drivers dd
                            JOIN draftpicks dp
                            ON dd.driverId = dp.turboDriverId
                            WHERE raceId = "1031"');

        $draftPicksSQL = [];
        array_push($draftPicksSQL, $primaryDraftPicksSQL);
        array_push($draftPicksSQL, $secondaryDraftPicksSQL);
        array_push($draftPicksSQL, $turboDraftPicksSQL);
        return $draftPicksSQL;
    }

}

<?php namespace App\Models\Roster;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\DraftPicks;
use App\Models\Person\TeamManager;

class RosterSelect extends Model
{
    protected $table = 'draftable_drivers';

    public function ShowAvailableDriver() {

    }

    public static function showPickOrder() {
        $pickOrderSQL = DB::select('SELECT dp.pickOrder, tm.firstName, tm.handleName, tm.teamOwnerId FROM teammanagers tm
                                INNER JOIN draftpicks dp
                                ON tm.teamOwnerId = dp.teamOwnerId
                                WHERE raceId = "1031"
                                ORDER BY pickOrder');

        return $pickOrderSQL;
    }

    //example methods so I don't forget later
    public function addDriver() {}

    public function PickDriver() {}

    public function SetRoster() {}
}

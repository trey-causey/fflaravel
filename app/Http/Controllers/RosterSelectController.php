<?php

namespace App\Http\Controllers;

use App\Models\Roster\RosterSelect;
use App\Models\Person\Teamowner;
use App\Models\DraftPicks;
use Illuminate\Http\Request;

class RosterSelectController extends Controller
{
    //
    public function ShowAvailableDriver() {
        $draftPicks = DraftPicks::where('raceId',1031)->
                        orderBy('pickOrder')->get();
        $dpObject = new DraftPicks();
        $pickOrder = $dpObject->GetOrderByRaceId(1031);
        $teamManagerList = Teamowner::all();
        //use a join here: https://laravel.com/docs/7.x/queries
        $availableDriver = RosterSelect::all();

        return view('roster.index')
                                ->with(['drivers' => $availableDriver])
                                ->with(['teammanagers' => $teamManagerList])
                                ->with(['picks' => $draftPicks])
                                ->with(['pickOrder' => $pickOrder]);
    }
}

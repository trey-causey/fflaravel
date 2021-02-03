<?php namespace App\Http\Controllers;

use App\Models\Roster\RosterSelect;
use App\Models\Person\Teamowner;
use App\Models\DraftPicks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RosterSelectController extends Controller
{
    public function ShowAvailableDriver() {
        //$availableDriver = RosterSelect::all();
        $availableDriver = RosterSelect::all()->where('isActive','=', 1);
        $testPicks = RosterSelect::showPickOrder();
        return view('roster.index')
                                ->with(['drivers' => $availableDriver])
                                ->with(['testPicks' => $testPicks])
                                ;
    }
}

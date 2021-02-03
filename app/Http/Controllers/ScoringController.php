<?php namespace App\Http\Controllers;

use App\Models\DraftPicks;
use App\Models\Person\Driver;
use App\Models\Roster\RosterSelect;
use Illuminate\Http\Request;

class ScoringController extends Controller
{
    public function ShowPicksTable()
    {
        $draftPicks = DraftPicks::ShowDraftPicksTableByRace(1032);

        return view('scoring.index')
            ->with(['draftPicks' => $draftPicks])
            ;
    }
    //$testPicks = RosterSelect::showPickOrder();
    //$draftPicks = DraftPicks::ShowPicksByRace('1031');
    //$draftPicks = DraftPicks::ShowDraftPicksTableByRace('1031');

    //->with(['testPicks' => $testPicks])

}

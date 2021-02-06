<?php namespace App\Http\Controllers;

use App\Models\DraftPicks;
use App\Models\Person\Driver;
use App\Models\Roster\RosterSelect;
use App\Models\Imports\Ergast\ErgastDefaultImport;
use Illuminate\Http\Request;

class ScoringController extends Controller
{
    public function ShowPicksTable()
    {
        $roundsInSeason = ErgastDefaultImport::GetRoundsBySeason(2020);
        $draftPicks = DraftPicks::ShowDraftPicksTableByRace(1031);

        return view('scoring.index')
            ->with(['draftPicks' => $draftPicks])
            ->with(['roundsInSeason' => $roundsInSeason])
            ;
    }
}

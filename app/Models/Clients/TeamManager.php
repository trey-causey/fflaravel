<?php namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Roster\RosterSelect;
use App\Models\DraftPicks;

class TeamManager extends Model
{
    protected $table = 'teammanagers';
    protected $guarded = [];

    public function showPickOrder() {
        $tm = TeamManager::class;

    }

    public function createTeamManager() {

    }


}

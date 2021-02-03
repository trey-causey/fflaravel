<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Roster\RosterSelect;
use App\Models\DraftPicks;

class Teamowner extends Model
{
    protected $table = 'teammanagers';

    public function showPickOrder() {

    }
}

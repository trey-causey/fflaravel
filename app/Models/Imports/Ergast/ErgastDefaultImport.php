<?php namespace App\Models\Imports\Ergast;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ErgastDefaultImport extends Model
{

    public static function GetRoundsBySeason($year)
    {
        $variable = [$year];
        $racesSQL = DB::select('SELECT * FROM races WHERE YEAR = ?', $variable);

        return $racesSQL;
    }
}

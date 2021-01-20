<?php namespace App\Models\Stats;

use App\Models\Model;

class DriverStats extends Model
{
    protected $table ='driverstats';
    protected $guarded = [];
    //
    public function addCalculation()
    {
        return [
            'topQualifyingRound' => 3
        ];
    }

    public function addCalc($obj)
    {
        $this->save($obj);
    }
}

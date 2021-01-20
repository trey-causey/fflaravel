<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driverstats', function (Blueprint $table) {
            $table->id();
            $table->integer('raceId');
            $table->integer('driverId')->nullable();
            //$table->integer('constructorId');
            //$table->integer('topQualifyingRound');
            //$table->integer('tqrPoints');
            //$table->integer('qualifyingPosition');
            //$table->integer('qpPoints');
            //$table->integer('startGridPosition');
            //$table->integer('raceFinishPosition');
            //$table->integer('netChangeInPosition');
            //$table->integer('ncipPoints');
            //$table->integer('penaltyId');
            //$table->integer('penaltyPoints');
            //$table->boolean('fastestLap');
            //$table->integer('flPoints');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driverstats');
    }
}

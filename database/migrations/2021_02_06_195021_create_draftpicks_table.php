<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDraftpicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draftpicks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id('draftId');
            $table->unsignedInteger('raceId');
            $table->unsignedInteger('teamOwnerId');
            $table->unsignedInteger('primaryDriverId');
            $table->unsignedInteger('secondaryDriverId');
            $table->unsignedInteger('turboDriverId');
            $table->unsignedInteger('constructorId');
            $table->unsignedInteger('pickOrder')->nullable(true);
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
        Schema::dropIfExists('draftpicks');
    }
}

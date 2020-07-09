<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('driver_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->unsignedSmallInteger('car_id');
            $table->unsignedSmallInteger('city_id');
            $table->unsignedSmallInteger('country_id');
            $table->boolean('is_active');
            $table->text('portrait_url');
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
        //Schema::dropIfExists('drivers');
        Schema::dropIfExists('drivers');
    }
}

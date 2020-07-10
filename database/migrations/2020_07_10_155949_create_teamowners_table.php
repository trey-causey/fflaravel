<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamowners', function (Blueprint $table) {
            $table->id('teamowner_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->timestamps();
            $table->unsignedSmallInteger('address_id');
            $table->boolean('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teamowners');
    }
}

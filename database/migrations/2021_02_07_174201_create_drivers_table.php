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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id('driverId');
            $table->string('driverRef')->nullable(false);
            $table->unsignedInteger('number')->nullable(true);
            $table->string('code')->unique();
            $table->string('forename')->nullable(false);
            $table->string('surname')->nullable(false);
            $table->date('dob')->nullable(true);
            $table->string('nationality')->nullable(true);
            $table->string('url')->nullable(false)->unique();
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
        Schema::dropIfExists('drivers');
    }
}

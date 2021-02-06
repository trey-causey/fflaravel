<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDraftableDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draftable_drivers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id('id');
            $table->char('driverCode', 3);
            $table->unsignedInteger('driverId')->unique();
            $table->string('driverRef');
            $table->string('firstName');
            $table->string('surname');
            $table->date('dateOfBirth');
            $table->boolean('isActive');
            $table->text('portraitUrl');

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
        Schema::dropIfExists('draftable_drivers');
    }
}

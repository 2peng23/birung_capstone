<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('specialty')->nullable();
            $table->string('image')->nullable();

            $table->string('date1')->nullable();
            $table->string('time_from1')->nullable();
            $table->string('time_to1')->nullable();
            $table->string('timeslot1')->nullable();

            $table->string('date2')->nullable();
            $table->string('time_from2')->nullable();
            $table->string('time_to2')->nullable();
            $table->string('timeslot2')->nullable();

            $table->string('date3')->nullable();
            $table->string('time_from3')->nullable();
            $table->string('time_to3')->nullable();
            $table->string('timeslot3')->nullable();

            $table->string('date4')->nullable();
            $table->string('time_from4')->nullable();
            $table->string('time_to4')->nullable();
            $table->string('timeslot4')->nullable();

            $table->string('date5')->nullable();
            $table->string('time_from5')->nullable();
            $table->string('time_to5')->nullable();
            $table->string('timeslot5')->nullable();

            $table->string('date6')->nullable();
            $table->string('time_from6')->nullable();
            $table->string('time_to6')->nullable();
            $table->string('timeslot6')->nullable();
            
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
        Schema::dropIfExists('doctors');
    }
};

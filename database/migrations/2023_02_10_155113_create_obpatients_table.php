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
        Schema::create('obpatients', function (Blueprint $table) {
            $table->id();
            $table->string('name2')->nullable();
            $table->string('email2')->nullable();
            $table->string('age2')->nullable();
            $table->string('sex2')->nullable();
            $table->string('address2')->nullable();
            $table->string('bday2')->nullable();
            $table->string('phone2')->nullable();
            $table->string('height2')->nullable();
            $table->string('weight2')->nullable();
            $table->string('bmi2')->nullable();
            $table->string('bp2')->nullable();
            $table->string('o2sat2')->nullable();
            $table->string('hr2')->nullable();
            $table->string('temp2')->nullable();
            $table->string('diag2')->nullable();
            $table->string('prec2')->nullable();
            $table->string('notes2')->nullable();
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
        Schema::dropIfExists('obpatients');
    }
};

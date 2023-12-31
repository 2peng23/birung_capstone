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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('address')->nullable();
            $table->string('bday')->nullable();
            $table->string('phone')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('bmi')->nullable();
            $table->string('bp')->nullable();
            $table->string('o2sat')->nullable();
            $table->string('hr')->nullable();
            $table->string('temp')->nullable();
            $table->string('diag')->nullable();
            $table->string('prec')->nullable();
            $table->string('notes')->nullable();

           
            
            
           
           

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
        Schema::dropIfExists('patients');
    }
};

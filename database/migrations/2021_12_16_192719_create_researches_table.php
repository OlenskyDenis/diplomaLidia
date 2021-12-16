<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researches', function (Blueprint $table) {
            $table->id();
            $table->integer('lkp');
            $table->float('bsk5');
            $table->float('hsk');
            $table->float('soluble_oxygen');
            $table->float('ph');
            $table->tinyInteger('roundworms');
            $table->tinyInteger('conformity');
            $table->float('price');
            $table->foreignId('reservoir_id')->constrained("reservoirs");
            $table->foreignId('research_type_id')->constrained("research_types");
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
        Schema::dropIfExists('researches');
    }
}

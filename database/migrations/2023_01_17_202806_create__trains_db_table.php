<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsDbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_trains_db', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Compagnia');
            $table->string('Fascia_oraria');
            $table->string('velocta_max');
            /* $table->string('Nome'); */
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
        Schema::dropIfExists('_trains_db');
    }
}

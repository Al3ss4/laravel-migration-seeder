<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("nome_azienda");
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->time("orario_di_partenza");
            $table->time("orario_di_arrivo");
            $table->string("codice_treno");
            $table->string("numero_carrozza");
            $table->boolean("in_orario");
            $table->boolean("cancellato");
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
        Schema::dropIfExists('trains');
    }
}

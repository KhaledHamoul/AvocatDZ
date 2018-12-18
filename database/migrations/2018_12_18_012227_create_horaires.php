<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoraires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaires', function (Blueprint $table) {
            $table->increments('id');
            $table->time('samedi_d')->default(null);
            $table->time('samedi_f')->default(null);
            $table->time('dimanche_d')->default(null);
            $table->time('dimanche_f')->default(null);
            $table->time('lundi_d')->default(null);
            $table->time('lundi_f')->default(null);
            $table->time('mardi_d')->default(null);
            $table->time('mardi_f')->default(null);
            $table->time('mercredi_d')->default(null);
            $table->time('mercredi_f')->default(null);
            $table->time('jeudi_d')->default(null);
            $table->time('jeudi_f')->default(null);
            $table->time('vendredi_d')->default(null);
            $table->time('vendredi_f')->default(null);
            $table->timestamps();
        });

        Schema::table('professionnels', function (Blueprint $table) {
            $table->integer('horaires_id')->unsigned()->nullable();
            $table->foreign('horaires_id')->references('id')->on('horaires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaires');
    }
}

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
            $table->time('samedi_d')->default('0');
            $table->time('samedi_f')->default('0');
            $table->time('dimanche_d')->default('0');
            $table->time('dimanche_f')->default('0');
            $table->time('lundi_d')->default('0');
            $table->time('lundi_f')->default('0');
            $table->time('mardi_d')->default('0');
            $table->time('mardi_f')->default('0');
            $table->time('mercredi_d')->default('0');
            $table->time('mercredi_f')->default('0');
            $table->time('jeudi_d')->default('0');
            $table->time('jeudi_f')->default('0');
            $table->time('vendredi_d')->default('0');
            $table->time('vendredi_f')->default('0');
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

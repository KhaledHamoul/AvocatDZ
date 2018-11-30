<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('competences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('competence');
            $table->string('description')->nullable();
            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->timestamps();
        });
        
        Schema::create('professionnels_competences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competence_id')->unsigned();
            $table->integer('professionnel_id')->unsigned();
            $table->timestamps(); 
            $table->foreign('competence_id')->references('id')->on('competences');
            $table->foreign('professionnel_id')->references('id')->on('professionnels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

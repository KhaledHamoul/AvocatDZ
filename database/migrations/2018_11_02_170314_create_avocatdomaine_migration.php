<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvocatdomaineMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('avocat_domaines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('domaine_id')->unsigned();
            $table->integer('avocat_id')->unsigned();
            $table->timestamps();
            $table->foreign('avocat_id')->references('id')->on('avocats')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('domaine_id')->references('id')->on('domaines')
						->onDelete('cascade')
						->onUpdate('cascade');
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

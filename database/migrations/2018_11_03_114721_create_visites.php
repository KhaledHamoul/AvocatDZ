<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('visites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('avocat_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->timestamps();
            $table->foreign('avocat_id')->references('id')->on('avocats')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
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

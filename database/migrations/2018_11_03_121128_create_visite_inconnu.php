<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiteInconnu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('visite_inconnus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professionnel_id')->unsigned();
            $table->timestamps();
            $table->foreign('professionnel_id')->references('id')->on('professionnels')
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

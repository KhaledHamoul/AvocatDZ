<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('img_url');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
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

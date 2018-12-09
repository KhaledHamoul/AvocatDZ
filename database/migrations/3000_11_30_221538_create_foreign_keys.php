<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        
       Schema::table('reviews', function (Blueprint $table) {
            $table->integer('professionnel_id')->unsigned();
            $table->foreign('professionnel_id')->references('id')->on('professionnels')->onDelete('cascade');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->unique(['professionnel_id','client_id']);
            $table->integer('visite_id')->unsigned();
            $table->foreign('visite_id')->references('id')->on('visites')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['professionnel_id']);
            $table->dropColumn('professionnel_id');
            $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
            $table->dropForeign(['visite_id']);
            $table->dropColumn('visite_id');
        });
    }
}

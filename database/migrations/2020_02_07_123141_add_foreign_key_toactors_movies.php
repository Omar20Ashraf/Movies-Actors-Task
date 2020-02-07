<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToactorsMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actors_movies', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('movies_id')->nullable()->change();
            $table->unsignedBigInteger('actors_id')->nullable()->change();

            $table->foreign('movies_id')
                  ->references('id')->on('movies')
                  ->onDelete('set null');

            $table->foreign('actors_id')
                  ->references('id')->on('actors')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actors_movies', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->integer('user_id');
            $table->integer('tematica_id');
            $table->timestamps();

            $table->index(["user_id"], 'fk_partidas_users1_idx');
            $table->index(["tematica_id"], 'fk_partidas_tematicas1_idx');

            $table->foreign('user_id', 'fk_partidas_users1_idx')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tematica_id', 'fk_partidas_tematicas1_idx')
                ->references('id')->on('tematicas')
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
        Schema::dropIfExists('partidas');
    }
}

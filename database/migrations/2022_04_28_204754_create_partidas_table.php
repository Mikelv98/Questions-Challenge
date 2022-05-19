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
            $table->string('nombre1');
            $table->string('avatar1');
            $table->integer('puntuacion1');
            $table->string('nombre2')->nullable();
            $table->string('avatar2')->nullable();
            $table->integer('puntuacion2')->nullable();
            $table->string('nombre3')->nullable();
            $table->string('avatar3')->nullable();
            $table->integer('puntuacion3')->nullable();
            $table->integer('tematica_id')->nullable();
            $table->timestamps();

            $table->index(["tematica_id"], 'fk_partidas_tematicas1_idx');

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

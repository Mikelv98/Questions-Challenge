<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('descripcion');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuestacorrecta');
            $table->string('puntaje')->nullable();
            $table->integer('tematica_id');
            $table->timestamps();

            $table->index(["tematica_id"], 'fk_preguntas_tematicas1_idx');

            $table->foreign('tematica_id', 'fk_preguntas_tematicas1_idx')
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
        Schema::dropIfExists('preguntas');
    }
}

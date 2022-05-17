<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('respuestacorrecta');
            $table->integer('preguntas_id');
            $table->timestamps();

            $table->index(["preguntas_id"], 'fk_respuestas_preguntas1_idx');

            $table->foreign('preguntas_id', 'fk_respuestas_preguntas1_idx')
            ->references('id')->on('preguntas')
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
        Schema::dropIfExists('respuestas');
    }
}

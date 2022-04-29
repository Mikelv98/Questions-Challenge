<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvataresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatares', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('name')->unique();
            $table->binary('foto')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();

            $table->index(["user_id"], 'fk_avatares_users1_idx');


            $table->foreign('user_id', 'fk_avatares_users1_idx')
                ->references('id')->on('users')
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
        Schema::dropIfExists('avatares');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_moduls', function (Blueprint $table) {
            $table->id('id_umod');
            $table->integer('id_role');
            $table->integer('id_modul');
            $table->integer('view');
            $table->integer('input');
            $table->integer('update');
            $table->integer('delete');
            $table->integer('posting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_moduls');
    }
}

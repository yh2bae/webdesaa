<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStruktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strukturs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('niap')->nullable();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('address');
            $table->string('agama');
            $table->string('pendidikan_terakhir');
            $table->string('nomor_sk')->nullable();
            $table->string('tanggal_sk')->nullable();
            $table->string('masa_jabatan')->nullable();
            $table->enum('status', ['aktif' , 'tidak aktif']);
            $table->string('image');
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
        Schema::dropIfExists('strukturs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nik')->unique();
            $table->string('tag_idcard')->unique();
            $table->string('name');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('ttl');
            $table->string('golongan_darah');
            $table->string('pendidikan');
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
        Schema::dropIfExists('data_penduduks');
    }
};

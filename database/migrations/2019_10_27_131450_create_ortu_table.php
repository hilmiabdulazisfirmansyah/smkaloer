<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ortu', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('user_id')->nullable()->unique();
            $table->integer('siswa_id')->unique();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('nik_ayah')->nullable()->unique();
            $table->string('nik_ibu')->nullable()->unique();
            $table->string('nik_wali')->nullable()->unique();
            // jika nik ayah sama dengan yang ada di dapodik maka
            // id siswa akan di input kan beserta user_id untuk orang tua
            // secara otomatis registrasi 2 akun sekaligus
            // user_id dengan role siswa dan user_id dengan role orang tua
            // kemudian data-data ortu semua di get dari dapodik dan dimasukkan ke dalam database
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
        Schema::dropIfExists('ortu');
    }
}

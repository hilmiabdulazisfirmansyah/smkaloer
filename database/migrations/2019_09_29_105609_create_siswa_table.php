<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unique();
            $table->integer('nis')->unique();
            $table->string('nik')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nama');
            $table->string('no_kip')->nullable();
            $table->string('no_kks')->nullable();
            $table->string('nomor_telepon_seluler')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->text('alamat_jalan');
            $table->string('rt');
            $table->string('rw');
            $table->string('kode_wilayah')->nullable()->default(null);
            $table->string('kode_pos')->nullable()->default(null);
            $table->string('lintang')->nullable()->default(null);
            $table->string('bujur')->nullable()->default(null);
            $table->string('desa_kelurahan')->nullable()->default(null);
            $table->string('alat_transportasi_id')->nullable()->default(null);
            $table->string('anak_keberapa')->nullable()->default(null);
            
            $table->string('id_provinsi')->nullable()->default(null);
            $table->string('id_kabupaten')->nullable()->default(null);
            $table->string('no_skhun');
            $table->string('no_peserta_ujian');
            $table->string('no_seri_ijazah');
            $table->string('sekolah_asal')->nullable()->default(null);
            $table->string('tanggal_masuk_sekolah');
            $table->text('ket_keluar')->nullable();
            // keterangan yang diberikan secara detail oleh guru yang mengeluarkan
            $table->string('soft_delete')->default(0);
            // 0 = data masih tersimpan di database
            // 1 = data dihapus dari interfaces
            // 2 = data dihapus permanent
            $table->string('id_kelas')->nullable();
            $table->string('id_jurusan')->nullable();
            $table->string('id_rombel')->nullable();
            $table->integer('status')->default(0);
            // 0=siswa baru 1=siswa aktif 2=dikeluarkan
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
        Schema::dropIfExists('siswa');
    }
}

<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'NIK' => '123456789',
            'NIS' => '',
            'NISN' => '123456789',
            'nama_lengkap' => 'Hilmi Abdul Azis Firmansyah',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '29/07/1994',
            'alamat' => 'KP. Babakan Sukasari',
            'rt' => '01',
            'rw' => '09',
            'provinsi' => 'Jawa Barat',
            'kabupaten' => 'Bandung',
            'Kecamatan' => 'Ciparay',
            'desa' => 'Mekarsari',
            'jurusan' => 'TKJ',
            'kelas' => '',
            'rombel' => '',
            'ibu_kandung' => 'Lilis Nurjanah',
            'alamat_ibu' => 'sda',
            'asal_sekolah' => 'SMK ITIKURIH HIBARNA',
            'status' => 2,
            'keterangan' => 'Belum Di Verifikasi',
            'created_at' => now()
        ]);
    }
}

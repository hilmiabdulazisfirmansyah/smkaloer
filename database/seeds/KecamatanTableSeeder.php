<?php

use Illuminate\Database\Seeder;

class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $kecamatan = Storage::disk('local')->get('kecamatan.json');
        $kecamatan = json_decode($kecamatan, true);

        foreach ($kecamatan as $kec) {
            
            DB::table('kecamatan')->insert([
                'kode_wilayah' => $kec['kode_wilayah'],
                'nama' => $kec['nama']

            ]);

        }



    }
}

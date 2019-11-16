<?php

use Illuminate\Database\Seeder;

class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$kabupaten = DB::table('kabupaten')->get('id');

    	function kecamatan($id_kab){
    		$url = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/'.$id_kab.'/kecamatan';
    		$curl = curl_init();
    		curl_setopt($curl, CURLOPT_URL, $url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		$result = curl_exec($curl);
    		curl_close($curl);
    		$result = json_decode($result, true);
    		$kecamatan = $result['kecamatans'];
    		return $kecamatan;
    	}

    	foreach ($kabupaten as $kab){
    		$id_kab = $kab->id;
    		
    		foreach (kecamatan($id_kab) as $kec){

    			DB::table('kecamatan')->insert([
    				'id' => $kec['id'],
    				'id_kabupaten' => $kec['id_kabupaten'],
    				'nama_kecamatan' => $kec['nama']
    			]);
    		}

    	}


    }
}

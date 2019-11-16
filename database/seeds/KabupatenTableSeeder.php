<?php

use Illuminate\Database\Seeder;

class KabupatenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$provinsi = DB::table('provinsi')->get('id');
    	function kabupaten($id_prov){
    		$url = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/'.$id_prov.'/kabupaten';
    		$curl = curl_init();
    		curl_setopt($curl, CURLOPT_URL, $url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		$result = curl_exec($curl);
    		curl_close($curl);
    		$result = json_decode($result, true);
    		$kabupaten = $result['kabupatens'];
    		return $kabupaten;
    	}

    	foreach ($provinsi as $prov){
    		$id_prov = $prov->id;
    		
    		foreach (kabupaten($id_prov) as $kab){

    			DB::table('kabupaten')->insert([
    				'id' => $kab['id'],
    				'id_provinsi' => $kab['id_prov'],
    				'nama_kabupaten' => $kab['nama']
    			]);
    		}

    	}
    	


    }
}

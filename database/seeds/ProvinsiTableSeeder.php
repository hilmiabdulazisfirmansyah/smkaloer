<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$url = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi';
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, $url);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    	$result = curl_exec($curl);
    	curl_close($curl);
    	$result = json_decode($result, true);
    	$provinsi = $result['semuaprovinsi'];

    	foreach ($provinsi as $prov) {
    	DB::table('provinsi')->insert([
    		'id' => $prov['id'],
    		'nama_provinsi' => $prov['nama'],
    	]);
        
    	}
    }
}

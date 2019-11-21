<?php

function sekolah(){
  $username = 'dedeheryanto15@gmail.com';
   $password = 'Samrat235';
   $semester_id = '20191';

   $url = 'http://smkaloerwargakusumah.sch.id:5774/login';
   $url_guru = 'http://smkaloerwargakusumah.sch.id:5774/rest/sekolah';

   $cookie = "cookie.txt";

   $postfields = 'username=dedeheryanto15%40gmail.com&password=Samrat235&semester_id=20191';

   $curl = curl_init();

   curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_COOKIEJAR => $cookie,
      CURLOPT_COOKIEFILE => $cookie,
      CURLOPT_POSTFIELDS => $postfields,
      CURLOPT_POST => 1,
      CURLOPT_REFERER => $url,
      CURLOPT_HTTPHEADER => array(
         "Content-Type: application/x-www-form-urlencoded",
         "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36"
      ),
   ));

   $response = curl_exec($curl);
   $err = curl_error($curl);


   $url = $url_guru;
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_POST, 0);

   $data = curl_exec($curl);

   curl_close($curl);

   if ($err) {
      echo "cURL Error #:" . $err;
   } else {
      $data = json_decode($data, true);
      return $data['rows'];
   }
}
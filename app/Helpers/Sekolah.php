<?php

function backup_dapodik($url){
  $cookie = base_path("cookie.txt");

  $curl = curl_init();
  curl_setopt_array($curl, array(
   CURLOPT_URL => $url,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_COOKIEFILE => $cookie,
   CURLOPT_POST => 0,
));

  $data = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
   echo "cURL Error #:" . $err;
} else {
   $data = json_decode($data, true);
   return $data['rows'];
}
}

function backup_guru($url){
   $cookie = base_path("cookie.txt");

  $curl = curl_init();
  curl_setopt_array($curl, array(
   CURLOPT_URL => $url,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_COOKIEFILE => $cookie,
   CURLOPT_POST => 0,
 ));

  $data = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
   echo "cURL Error #:" . $err;
} else {
   $data = json_decode($data, true);
   return $data['rows'];
}
}

function grabSekolah($kec){
     $url = 'https://data.dikdasmen.kemdikbud.go.id/refsp/rata/'.$kec;
     $cookie = base_path("cookie.txt");

     $curl = curl_init();
     curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_COOKIEFILE => $cookie,
      CURLOPT_POST => 0,
   ));

     $data = curl_exec($curl);
     $err = curl_error($curl);

     curl_close($curl);

     if ($err) {
      echo "cURL Error #:" . $err;
   } else {
      $data = json_decode($data, true);
      return $data;
   }
}


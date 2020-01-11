<?php

function post_dapodik($url, $postfields){
  $cookie = base_path("cookie.txt");
  $postfields = $postfields;

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
  echo $response;
}


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

function sync_dapodik($url, $data){
  $cookie = base_path("cookie.txt");
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEFILE => $cookie,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache",
      "content-type: application/json",
      "x-api-key: smartapp"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
<<<<<<< HEAD
}
=======
}

function getTemplate($pinT){
  $header = "[";
  $footer = "]";
  $content = "";
  $mysqli = new mysqli("192.168.100.8","hilmi","ransomware","fingerprint");
  $sqlGetTemp = mysqli_query($mysqli, "SELECT * FROM tb_template where pin=".$pinT);
  while($dataGetTemp = mysqli_fetch_array($sqlGetTemp)){
    if ($content != ""){
      $content = $content.',';
    }
    $content = $content.'{"pin":"'.$dataGetTemp['pin'].'","idx":"'.$dataGetTemp['finger_idx'].'","alg_ver":"'.$dataGetTemp['alg_ver'].'","template":"'.$dataGetTemp['template'].'"}';
  }
  return ($header.$content.$footer);
}
>>>>>>> 67f4089ac00f9a0a874c5c888387493d215ec299

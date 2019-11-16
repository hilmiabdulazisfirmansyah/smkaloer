<?php

function sekolah($param){
   /*
   *  sekolah_id
   *  nama
   *  nss
   *  npsn
   *  bentuk_pendidikan_id
   *  alamat_jalan
   *  rt
   *  rw
   *  nama_dusun
   *  desa_kelurahan
   *  kode_wilayah
   *  kode_pos
   *  lintang
   *  bujur
   *  nomor_telepon
   *  nomor_fax
   *  email
   *  website
   *  kebutuhan_khusus_id
   *  status_sekolah
   *  sk_pendirian_sekolah
   *  tanggal_sk_pendirian_sekolah
   *  status_kepemilikan_id
   *  yayasan_id
   *  sk_izin_operasional
   *  tanggal_sk_izin_operasional
   *  no_rekening
   *  nama_bank
   *  cabang_kcp_unit
   *  rekening_atas_nama
   *  mbs
   *  kode_registrasi
   *  npwp
   *  nm_wp
   *  keaktifan
   *  flag
   *  create_data
   *  soft_delete
   *  last_sync
   *  updater_id
   *  bentuk_pendidikan_id_str
   *  kode_wilayah_str
   *  kebutuhan_khusus_id_str
   *  yayasan_id_str
   *  vld_count
    */
   $url = 'http://192.168.100.98:5774/rest/sekolah';
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cookie: killme=dont; PHPSESSID=6kn72k5cl8h1uosm1pcvlq7i5n; penugasan=oke"));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec($curl);
   curl_close($curl);
   $result = json_decode($result, true);
   return $result['rows'][0][$param];
}
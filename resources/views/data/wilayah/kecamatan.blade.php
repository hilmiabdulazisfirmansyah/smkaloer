@php
$kecamatan = Storage::disk('local')->get('kecamatan.json');
$kecamatan = json_decode($kecamatan, true);

$id_kab =isset($_GET['id_kab'])?$_GET['id_kab']:'not yet';

$kecamatan = array_filter($kecamatan, function ($var) use ($id_kab) {
    return ($var['id_kabupaten'] == $id_kab);
});

@endphp

@foreach ($kecamatan as $kec)
	<option value="{{ $kec['id'] }}">{{ $kec['nama_kecamatan'] }}</option>
@endforeach
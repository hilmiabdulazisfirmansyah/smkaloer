@php
$kabupaten = Storage::disk('local')->get('kabupaten.json');
$kabupaten = json_decode($kabupaten, true);

$id_prov =isset($_GET['id_prov'])?$_GET['id_prov']:'not yet';

$kabupaten = array_filter($kabupaten, function ($var) use ($id_prov) {
    return ($var['id_provinsi'] == $id_prov);
});

@endphp

@foreach ($kabupaten as $kab)
	<option value="{{ $kab['id'] }}">{{ $kab['nama_kabupaten'] }}</option>
@endforeach
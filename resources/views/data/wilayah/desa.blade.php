@php
$id_kec = isset($_GET['id_kec'])?$_GET['id_kec']:'not yet';
$desa = getListDesa($id_kec);
@endphp

@foreach ($desa as $ds)
	<option value="{{ $ds['id_desa'] }}">{{ $ds['nama_desa'] }}</option>
@endforeach
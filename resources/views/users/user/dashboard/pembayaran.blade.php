@extends('users.user.layouts.master')
@section('content')
{{-- Tugas --}}
@include('users.user.component.profile')

<div class="col-md-8">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Pembayaran Siswa</h3>
</div>
<div class="box-body">
<div class="table-responsive">

<table class="table table-striped table-hover">

<thead>
<tr>
<th align="left">Kelas</th>
<th align="left">Kode Pembayaran</th>
<th align="left" class="text text-center">Batas Waktu</th>
<th align="left" class="text text-left">Status</th>
<th class="text text-right">Jumlah</th>
<th class="text text-left">ID Pembayaran</th>
<th class="text text-left">Metode Pembayaran</th>
<th class="text text-left">Tanggal Bayar</th>
<th class="text text-right">Diskon</th>
<th class="text text-right">Dibayar</th>
<th class="text text-right">Sisa</th>
<th class="text text-right">Action</th>

</tr>
</thead>

<tbody>
@include('users.user.data.pembayaran')
</tbody>
</table>
</div>

</div>
</div>
</div>


@stop
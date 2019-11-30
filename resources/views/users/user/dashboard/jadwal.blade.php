@extends('users.user.layouts.master')

@section('css')

@include('users.user.css.css')

@stop

@section('content')

@include('users.user.layouts.partials.modal.tambahJadwal')
@include('users.user.data.mapel.daftarJadwal')

@stop

@section('script')
@include('users/user/scripts/script')
@stop
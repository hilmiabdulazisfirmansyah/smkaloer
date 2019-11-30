@extends('users.user.layouts.master')

@section('css')

@include('users.user.css.css')

@stop

@section('content')

@include('users.user.layouts.partials.modal.tambahMapel')
@include('users.user.data.mapel.daftarMapel')
@include('users.user.data.mapel.daftarGuruMapel')

@stop

@section('script')
@include('users/user/scripts/script')
@stop
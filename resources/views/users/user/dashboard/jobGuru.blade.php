@extends('users.user.layouts.master')

@section('css')

@include('users.user.css.css')

@stop

@section('content')

@include('users.user.layouts.partials.modal.tambahJobGuru')
@include('users.user.data.mapel.daftarJobGuru')

@stop

@section('script')
@include('users/user/scripts/script')
@stop
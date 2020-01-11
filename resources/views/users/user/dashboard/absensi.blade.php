@extends('users.user.layouts.master')
@extends('users.user.css.css')

@section('content')

@if (auth()->user()->role == 'Guru' && auth()->user()->job_title == '' || auth()->user()->job_title =='Guru Piket')
@include('users.user.layouts.partials.modal.editKehadiranSiswa')
@endif

@if (auth()->user()->role == 'Guru' && auth()->user()->job_title == 'Kepala Sekolah' || auth()->user()->job_title == 'Guru Piket')
@include('users.user.layouts.partials.modal.editKehadiranGuru')
@endif

@include('users.user.dashboard.datahadir')

@include('users.user.data.absensi.kehadiranUser')

@stop

@section('script')
@include('users/user/scripts/script')
@include('users/user/scripts/ajaxUpdate')
@stop
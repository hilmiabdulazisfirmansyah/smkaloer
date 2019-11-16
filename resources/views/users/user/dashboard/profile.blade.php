@extends('users.user.layouts.master')

@section('css')

@include('users.user.css.css')

@stop

@section('content')

@include('users.user.layouts.partials.modal.editAlamat')
@include('users.user.layouts.partials.modal.editDataOrtu')
@include('users.user.layouts.partials.modal.editDataLainnya')

@include('users.user.component.profile')
@include('users.user.component.profiledetail')
@include('users.user.component.pembayaran')
@include('users.user.component.timeline')
@include('users.user.component.dokumen')
@include('users.user.component.ujian')

@stop

@section('script')
@include('users/user/scripts/script')
@stop
@extends('users.user.layouts.master')
@extends('users.user.css.css')

@section('content')
@include('users.user.postingan.editor')
@stop

@section('script')
@include('users/user/scripts/script')
@include('users/user/scripts/ajaxUpdate')
@stop
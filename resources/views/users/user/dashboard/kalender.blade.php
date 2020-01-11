@extends('users.user.layouts.master')
@extends('users.user.css.css')

@section('content')

@include('users.user.component.kalender')

@stop

@section('script')
@include('users/user/scripts/script')
@include('users/user/scripts/ajaxUpdate')
@stop
@extends('users.user.layouts.master')

@section('css')

@include('users.user.css.css')

@stop

@section('content')
@include('users.user.layouts.partials.modal.infoUserFinger')
@include('users.user.component.finger.cek')
@include('users.user.component.finger.getUser')
@include('users.user.component.finger.delUser')
@include('users.user.component.finger.tambahUser')
<<<<<<< HEAD

=======
@include('users.user.component.finger.sync')
>>>>>>> 67f4089ac00f9a0a874c5c888387493d215ec299
@stop

@section('script')
@include('users/user/scripts/script')
@stop


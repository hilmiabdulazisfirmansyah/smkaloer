@extends('users.user.layouts.master')
@extends('users.user.css.css')

@section('content')
@include('users.user.dashboard.datahadir')
{{-- Tugas --}}
<div class="col">
@include('users/user/component/profile')
</div>

@if (auth()->user()->role == 'dev')
<div class="col">
<section class="col-lg-7 connectedSortable ui-sortable">
@include('users/user/dashboard/tugas')
</section>
</div>

<div class="col">
<section class="col-lg-5 connectedSortable ui-sortable">
@include('users/user/dashboard/kalender')
</section>
</div>
@endif

@stop

@section('script')
@include('users/user/scripts/script')
@include('users/user/scripts/ajaxUpdate')
@stop
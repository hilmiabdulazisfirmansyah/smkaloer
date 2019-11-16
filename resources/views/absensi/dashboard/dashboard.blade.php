@extends('absensi.layouts.master')
@section('content')
 @include('absensi.dashboard.datahadir')
      {{-- Tugas --}}
      <div class="row">
        <div class="col">
          <section class="col-lg-7 connectedSortable ui-sortable">
            @include('absensi/dashboard/tugas')
          </section>
        </div>

        <div class="col">
          <section class="col-lg-5 connectedSortable ui-sortable">
            @include('absensi/dashboard/kalender')
          </section>
        </div>

      </div>
@stop
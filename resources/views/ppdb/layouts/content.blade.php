<div class="content">
  <section class="content-header">
    <b style="font-size:32px">Dashboard</b> <small>Versi 0.1</small>
  </section>
  <ol class="breadcrumb" style="border-radius: 0px;border-bottom: 3px solid #ccc;background-color: teal;">
    <li><a href="#" style="color:white"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active" style="color:#ccc">Dashboard</li>
  </ol>


  <!-- Main content -->
  <section class="content">
    {{-- Data Siswa --}}
    <div class="row">
      <div class="col">
        <section class="col-lg-7 connectedSortable ui-sortable">
          @include('ppdb.data.dataSiswa')
        </section>
      </div> 

    <div class="row">
      <div class="col">
       <section class="col-lg-12 connectedSortable ui-sortable">
        @include('ppdb.data.tabelmin')
      </section>
    </div>
  </div>
  {{-- end Data Siswa --}}
</section>
</div>

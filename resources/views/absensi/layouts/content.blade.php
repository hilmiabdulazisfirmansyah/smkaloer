<div class="content">
  <section class="content-header">
    <b style="font-size:32px;text-transform: capitalize;">{{$judul}}</b> <small>Versi 0.1</small>
  </section>
  <ol class="breadcrumb" style="border-radius: 0px;border-bottom: 3px solid #ccc;background-color: teal;">
    <li><a href="#" style="color:white"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active" style="color:#ccc; text-transform: capitalize;">{{$judul}}</li>
  </ol>


  <!-- Main content -->
  <section class="content">
    @yield('content')
  </section>
</div>


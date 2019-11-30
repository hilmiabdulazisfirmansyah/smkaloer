
<!-- Widget: user widget style 1 -->
<div class="box box-widget widget-user">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-black" style="background: url('/lte/img/photo1.png') center center;">
    <h3 class="widget-user-username">
      {{-- nama Siswa --}}
    </h3>
    <h5 class="widget-user-desc">
      {{-- jabatan siswa --}}
    </h5>
  </div>

  <div class="widget-user-image">
    <img class="img-circle" src="/lte/img/user3-128x128.jpg" alt="User Avatar">
  </div>

  {{-- expr --}}

  <div class="box-footer">
    <div class="row">

      @if (auth()->user()->role == 'dev')
      
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">3,200</h5>
          <span class="description-text">SALES</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">13,000</h5>
          <span class="description-text">FOLLOWERS</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4">
        <div class="description-block">
          <h5 class="description-header">35</h5>
          <span class="description-text">PRODUCTS</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      @endif
    </div>
    <!-- /.row -->
  </div>

</div>


<ul class="list-group list-group-bordered">
  <li class="list-group-item">
   <div class="form-group">
    <label>Pilih Kehadiran :</label>
    <select name="kehadiran_id" class="form-control">
      <option value="1">Hadir</option>
      <option value="2">Sakit</option>
      <option value="3">Izin</option>
      <option value="4">Bolos</option>
      <option value="5">Terlambat</option>
      <option value="6">Alpha</option>
    </select>
  </div>
</li>
</ul>
  <!-- /.widget-user -->
@include('users.user.postingan.table')

<div class="box box-info">
  <div class="box-header">
    <h3 class="box-title">Postingan Editor
      <small><i>tulis postinganmu disini</i></small>
    </h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
        <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form action="{{ url('postingan/baru') }}" method="POST">
          @csrf
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-danger">Judul</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control" name="judul">
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="created_at" value="{{now()}}">
          </div><br>
          <div class="input-group">
            <div class="input-group-btn">
              <button type="button" class="btn btn-primary">Sub Judul</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control" name="sub_judul">
          </div>
          <br>
          <textarea name="postingan" class="form-control my-editor">
            
          </textarea>
          <br>

          <div class="input-group" style="float:right;">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
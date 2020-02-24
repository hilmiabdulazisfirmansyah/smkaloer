@php
$posts = DB::table('posts')->where('user_id', '=', auth()->user()->id)->get();
@endphp

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Postingan Anda</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>Judul</th>
              <th>Sub Judul</th>
              <th>Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $post->judul }}</td>
              <td>{{ $post->sub_judul }}</td>
              <td>
                <button type="submit" class="btn btn-warning" data-id="{{ $post->id }}">Edit</button>
                <button type="submit" class="btn btn-danger" data-id="{{ $post->id }}">Hapus</button>
              </td>
            </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
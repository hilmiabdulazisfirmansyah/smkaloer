<div class="col-md-6">
	<div class="box box-default">
		<div class="box-header with-border">
			<i class="glyphicon glyphicon-user text-success"><i class="glyphicon glyphicon-plus"></i></i>

			<h3 class="box-title">Tambah User</h3>
		</div>
		<!-- /.box-header -->
		
		<div class="box-body">
			<div class="form-group">
				<form>
					@csrf
					<select name="ip" class="form-control">
						<option>Pilih Fingerprint</option>
						@foreach ($device as $dev)
						<option value="{{$dev->server_IP}}">{{$dev->nama_finger}}</option>
						<input type="hidden" name="port" value="{{$dev->server_port}}">
						<input type="hidden" name="sn" value="{{$dev->device_sn}}">
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success" id="tambahDataFinger" data-id="{{$dev->No}}" data-ip='{{$dev->server_IP}}' data-port='{{$dev->server_port}}' data-sn='{{$dev->device_sn}}'>Tambah User</button>
					<span style="float: right;" id="storeDataFinger"></span>
				</div>
				<div class="form-group">
					<span class="label label-warning pull-left">Perhatian ! jika ingin menambahkan user, <br><span class="text-red">Hapus terlebih dahulu </span> dengan cara menekan tombol hapus semua user </span>
				</div>
			</form>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
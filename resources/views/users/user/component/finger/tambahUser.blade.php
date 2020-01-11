<div class="col-md-6">
	<div class="box box-default">
		<div class="box-header with-border">
			<i class="glyphicon glyphicon-user text-success"><i class="glyphicon glyphicon-plus"></i></i>

			<h3 class="box-title">Tambah User</h3>
		</div>
		<!-- /.box-header -->
		
		<div class="box-body">
			<form>
				@foreach ($device as $dev)
				<div class="form-group">
					@csrf
					<select name="ip" class="form-control">
<<<<<<< HEAD
						<option>Pilih Fingerprint</option>
=======
>>>>>>> 67f4089ac00f9a0a874c5c888387493d215ec299
						<option value="{{$dev->server_IP}}">{{$dev->nama_finger}}</option>
						<input type="hidden" name="port" value="{{$dev->server_port}}">
						<input type="hidden" name="sn" value="{{$dev->device_sn}}">
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success" id="tambahDataFinger" data-id="{{$dev->No}}" data-ip='{{$dev->server_IP}}' data-port='{{$dev->server_port}}' data-sn='{{$dev->device_sn}}'>Tambah User</button>
					<span style="float: right;" id="storeDataFinger"></span>
				</div>
				@endforeach
				<div class="form-group">
					<span class="label label-warning pull-left">Perhatian ! jika ingin menambahkan user, <br><span class="text-red">Hapus terlebih dahulu </span> dengan cara menekan tombol hapus semua user </span>
				</div>
			</form>

		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
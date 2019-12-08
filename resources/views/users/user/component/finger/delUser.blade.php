<div class="col-md-6">
	<div class="box box-default">
		<div class="box-header with-border">
			<i class="glyphicon glyphicon-user text-danger"></i>

			<h3 class="box-title">Hapus Semua User</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="form-group">
				<label>Device ID</label>
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
					<button type="submit" class="btn btn-danger" id="hapusDataFinger" data-id="{{$dev->No}}" data-ip='{{$dev->server_IP}}' data-port='{{$dev->server_port}}' data-sn='{{$dev->device_sn}}'>Hapus Semua User</button>
					<span style="float: right;" id="storeDelFinger"></span>
				</div>
			</form>
			
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
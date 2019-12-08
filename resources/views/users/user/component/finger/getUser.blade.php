<div class="col-md-6">
	<div class="box box-default">
		<div class="box-header with-border">
			<i class="glyphicon glyphicon-user text-info"></i>

			<h3 class="box-title">Informasi User</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="form-group">
				<label>Device ID</label>
				<form>
					<select id="selectCekUserFinger" name="ip" class="form-control">
						<option value="0">Pilih Fingerprint</option>
						@foreach ($device as $dev)
						<option value="{{$dev->server_IP}}">{{$dev->nama_finger}}</option>
						<input type="hidden" name="port" value="{{$dev->server_port}}">
						<input type="hidden" name="sn" value="{{$dev->device_sn}}">
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<button id="cekUserFinger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInfoUserFinger">Cek User</button>
				</div>
			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
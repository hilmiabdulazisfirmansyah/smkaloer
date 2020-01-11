<div class="col-md-6">
	<div class="box box-default">
		<div class="box-header with-border">
			<i class="glyphicon glyphicon-info-sign text-info"></i>

			<h3 class="box-title">Informasi Perangkat</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form>
						@foreach ($device as $dev)
				<div class="form-group">
					<label>Device ID</label>
					@csrf
					<select name="ip" class="form-control">
						<option value="{{$dev->server_IP}}">{{$dev->nama_finger}}</option>
						<input type="hidden" name="port" value="{{$dev->server_port}}">
						<input type="hidden" name="sn" value="{{$dev->device_sn}}">
					</select>
				</div>
					<button type="submit" class="btn btn-primary" id="cekFinger" data-id="{{$dev->No}}" >Cek Fingerprint</button>
				<div class="form-group">
					<span style="float: right;" id="jmlUserFinger"></span>
				</div>
						@endforeach
			</form>
			
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
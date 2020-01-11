<div class="col-md-6">
	<div class="box box-default">
		<div class="box-header with-border">
			<i class="glyphicon glyphicon-info-sign text-info"></i>

			<h3 class="box-title">Singkronisasi Fingerprint</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body text-center">
		<form action="{{ url('sync/syncFinger') }}">	
			<button class="btn btn-app" id="syncFinger">
                <i class="fa fa-refresh"></i> Sinkronisasi
            </button>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>
		</form>			
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
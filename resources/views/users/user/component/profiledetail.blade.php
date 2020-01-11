<div class="col-md-8">
	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Profile</a></li>
			
			@if (auth()->user()->role == 'dev')
			<li class=""><a href="#fee" data-toggle="tab" aria-expanded="false">Pembayaran</a></li>
			<li class=""><a href="#exam" data-toggle="tab" aria-expanded="false">Ujian</a></li>

			<li class=""><a href="#documents" data-toggle="tab" aria-expanded="false">Dokumen</a></li>
			<li class=""><a href="#timelineh" data-toggle="tab" aria-expanded="false">Timeline</a></li>
			@endif

		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="activity">
				<div class="tshadow mb25 bozero">
					<div class="table-responsive around10 pt0">
						<table class="table table-hover table-striped">
							<tbody>

								@if(auth()->user()->role == 'Siswa')
								@include('users.user.data.profile.siswa')
								@endif

								@if(auth()->user()->role == 'Guru')
								@include('users.user.data.profile.guru')
								@endif

							</tbody>
						</table>

						@if (auth()->user()->role == 'Siswa')
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDataLainnya" style="float: right;">
							<i class="fa fa-edit"></i> Edit Data Lainnnya
						</button>
						@endif

					</div>
				</div>
			</div>

			@if (auth()->user()->role == 'dev')
			@include('users.user.component.pembayaran')
			@endif
		</div>
	</div>
</div>


@include('users.user.layouts.partials.modal.editAvatar')

<div class="col-md-4">
	<!-- Widget: user widget style 1 -->
	
	<div class="box box-widget widget-user">
		<!-- Add the bg color to the header using any of the bg-* classes -->
		<div class="widget-user-header bg-black" style="background: url({{ asset('/lte/img/photo1.png') }}) center center;">
			<h3 class="widget-user-username" style="font:caption">{{auth()->user()->name}}</h3>
			<h5 class="widget-user-desc">{{auth()->user()->job_title}}</h5>
		</div>
		<div class="widget-user-image">
			<div class="img-circle Avatar" alt="User Avatar" data-toggle="modal" data-target="#editAvatar">
				
			</div>
			<span id="spnFilePath"></span>
		</div>

		<div class="box-footer">
			<div class="row">
				<div class="col-sm-4 border-right">
					<div class="description-block">
						<h5 class="description-header">{{-- 3,200 --}}</h5>
						<span class="description-text">{{-- Penjualan --}}</span>
					</div>
					<!-- /.description-block -->
				</div>
				<!-- /.col -->
				<div class="col-sm-4 border-right">
					<div class="description-block">
						<h5 class="description-header">{{-- 13,000 --}}</h5>
						<span class="description-text">{{-- Pengikut --}}</span>
					</div>
					<!-- /.description-block -->
				</div>
				<!-- /.col -->
				<div class="col-sm-4">
					<div class="description-block">
						<h5 class="description-header">{{-- 35 --}}</h5>
						<span class="description-text">{{-- Produk --}}</span>
					</div>
					<!-- /.description-block -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		
		@if (auth()->user()->role == 'Siswa')
		@include('users.user.component.profile.siswa')
		@endif

		@if (auth()->user()->role == 'Guru')
		@include('users.user.component.profile.guru')
		@endif
		
	</div>
	<!-- /.widget-user -->
</div>
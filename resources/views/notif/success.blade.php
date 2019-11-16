@if(session('sukses'))
<!--Modal: modalPush-->
<div id="notif-sukses" class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
	<!--Content-->
	<div class="modal-content text-center">
		<!--Header-->
		<div class="modal-header d-flex justify-content-center">
			<p class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="8vw" height="8vw" viewBox="0 0 8 8" fill="#dc3545">
				<path d="M1.41 0l-1.41 1.41.72.72 1.78 1.81-1.78 1.78-.72.69 1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72-1.44-1.41-.69.72-1.78 1.78-1.81-1.78-.72-.72z" />
			</svg></p>
		</div>

		<!--Body-->
		<div class="modal-body">

			<i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

			<p class="alert alert-success">{{session('sukses')}}</p>

		</div>

		<!--Footer-->
		<div class="modal-footer flex-center">
		</div>
	</div>
	<!--/.Content-->
</div>
</div>
<!--Modal: modalPush-->
@endif
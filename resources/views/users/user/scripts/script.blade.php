@section('script')

@include('users.user.scripts.cdn')
@include('scripts.ajaxSetup')
@include('scripts.ajaxEventSelect')
@include('scripts.session')

<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree();
	})

	$(function() {
		$( ".ui-sortable" ).sortable();
		$( ".ui-sortable" ).disableSelection();
	});

	$(function(){
		$('#kecamatan').keyup(function(){
			$('#listKecamatan').show();
			var query = $("#kecamatan").val();
			$.ajax(
			{
				url: "{{ url('/kecamatan') }}",
				type: "get",
				data: { query:query },
				success: function (data) {
					$('#listKecamatan').html(data);
					var kodeWilayah = $('#kode_wilayah').val();
					$('.kode_wilayah').click(function(){
						$('#kecamatan').val($('.kode_wilayah').html());
						$('#id_kecamatan').attr("value", kodeWilayah);
						$('#listKecamatan').hide();
					});
				}
			});
		});
	});

// image upload
$(function () {
	var fileupload = $("#FileUpload1");
	var filePath = $("#spnFilePath");
	var image = $("#imgFileUpload");
	image.click(function () {
		fileupload.click();
	});
	fileupload.change(function () {
		var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
		filePath.html("<b>Selected File: </b>" + fileName);
	});
});



</script>

@include('users.user.scripts.scriptsJobGuru')
@include('users.user.scripts.scriptsKehadiran')
@include('users/user/scripts/scriptsMapel')
@include('users/user/scripts/scriptsRombel')
@include('users/user/scripts/scriptsJadwal')

@stop
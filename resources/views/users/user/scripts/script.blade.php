@section('script')

@include('users.user.scripts.cdn')
@include('scripts.ajaxSetup')
@include('scripts.ajaxEventSelect')

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

  $( function() {
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

</script>
@stop
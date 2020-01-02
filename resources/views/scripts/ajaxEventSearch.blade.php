<script type="text/javascript">
	$("#kecamatan").on('change',function() {
	var id_prov = $("#kecamatan").val();
	$.ajax(
	{
		url: "{{ url('/kecamatan') }}",
		type: "get",
		data: { id_prov: id_prov},
		success: function (data) {
			$('#kabupaten').removeAttr('disabled');
			$('#kabupaten').html('<option>Pilih Kabupaten</option>'+data);
		}
	});
});
</script>
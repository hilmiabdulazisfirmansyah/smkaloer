<script type="text/javascript">
$("#provinsi").on('change',function() {
	var id_prov = $("#provinsi option:selected").val();
	$.ajax(
	{
		url: "{{ url('kabupaten') }}",
		type: "get",
		data: { id_prov: id_prov},
		success: function (data) {
			$('#kabupaten').removeAttr('disabled');
			$('#kabupaten').html('<option>Pilih Kabupaten</option>'+data);
		}
	});
});
</script>
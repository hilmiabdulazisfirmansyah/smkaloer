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

$("#kabupaten").on('change',function() {
	var id_kab = $("#kabupaten option:selected").val();
	$.ajax(
	{
		url: "{{ url('/kecamatan') }}",
		type: "get",
		data: { id_kab: id_kab},
		success: function (data) {
			$('#kecamatan').removeAttr('disabled');
			$('#kecamatan').html('<option>Pilih Kecamatan</option>'+data);
		}
	});
});

$("#kecamatan").on('change',function() {
	var id_kec = $("#kecamatan option:selected").val();
	$.ajax(
	{
		url: "{{ url('/desa') }}",
		type: "get",
		data: { id_kec: id_kec},
		success: function (data) {
			$('#desa').removeAttr('disabled');
			$('#desa').html('<option>Pilih Desa</option>'+data);
		}
	});
});
</script>
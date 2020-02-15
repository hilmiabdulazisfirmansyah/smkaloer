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
{{-- <script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
	CKEDITOR.replace('postingan', options);
</script> --}}

{{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }


      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>

@include('users.user.scripts.scriptsJobGuru')
@include('users.user.scripts.scriptsKehadiran')
@include('users/user/scripts/scriptsMapel')
@include('users/user/scripts/scriptsRombel')
@include('users/user/scripts/scriptsJadwal')
@include('users/user/scripts/scriptsFinger')
@include('users/user/scripts/scriptsKalender')

@stop
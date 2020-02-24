@section('css')
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Jquery UI -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{-- Alertify --}}
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
{{-- Select2 --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/semantic.min.css"/>
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="/lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/lte/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="/lte/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/lte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="/lte/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
   <link type="icon" rel="shortcut icon" href="{{('/img/favicon.ico')}}">
     <!-- fullCalendar -->
  <link rel="stylesheet" href="/lte/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="/lte/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style type="text/css">
  .Avatar {
  background:url('{{ auth()->user()->avatar }}');
  background-position: center;
  background-size: cover;
  height: 100px;max-height: 100px;
  width: 100px;max-width: 100px;
  cursor:pointer;
}

.Avatar-sidebar {
  background:url('{{ auth()->user()->avatar }}');
  background-position: center;
  background-size: cover;
  height: 45px;max-height: 45px;
  width: 45px;max-width: 45px;
  cursor:pointer;
}

.Avatar-header {
  background:url('{{ auth()->user()->avatar }}');
  background-position: center;
  background-size: cover;
  height: 25px;max-height: 25px;
  width: 25px;max-width: 25px;
  cursor:pointer;
}

.Avatar-widget {
  background:url('{{ auth()->user()->avatar }}');
  background-position: center;
  background-size: cover;
  height: 90px;max-height: 90px;
  width: 90px;max-width: 90px;
  cursor:pointer;
}
</style>
@endsection
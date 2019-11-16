@section('header')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M5GB8ZS');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="ncPTGQL5EW-oCJ27XsBoO-s6eiMpUh39QQfgT75eXr4" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link type="icon" rel="shortcut icon" href="{{('img/favicon.ico')}}">
{{-- Bootstrapt --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{-- icon bootstrap --}}
<link rel="stylesheet" type="text/css" href="{{'/open-iconic-master/font/css/open-iconic-bootstrap.css'}}">


{{-- datepicker --}}
<link href="{{'/air-datepicker/css/datepicker.css'}}" rel="stylesheet">
@endsection
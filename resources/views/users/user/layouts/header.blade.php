<header class="main-header">
<!-- Logo -->
<a href="#" class="logo" style="background-color: #324148;">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><img src="/lte/img/logo-primary.png" class="img-rect"></span>
<!-- logo for regular state and mobile devices -->

<span class="logo-lg" style="margin-left: -24px;background-color: #324148;">
<img src="/img/app_logo.png" class="img-rect">
</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" style="background-color: #324148;">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>



<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->
@if (auth()->user()->role == 'dev')
@include('users.user.component.message')
@endif
<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="{{auth()->user()->avatar}}" class="user-image" alt="User Image">
<span class="hidden-xs">{{auth()->user()->name}}</span>
</a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header" style="background: url('/lte/img/photo1.png') center center;">
<img src="{{auth()->user()->avatar}}" class="img-circle" alt="User Image">

<p>
{{auth()->user()->name}} - {{auth()->user()->job_title}}
<small>Bergabung sejak : {{auth()->user()->created_at->toDateString()}}</small>
</p>
</li>
<!-- Menu Body -->
@if (auth()->user()->role == 'dev')
@include('users.user.component.sosmed')
@endif
<!-- /.row -->
</li>
<!-- Menu Footer-->
<li class="user-footer">
<div class="pull-left">
<a href="{{ url('/profile') }}" class="btn btn-default btn-flat">Profile</a>
</div>
<div class="pull-right">
<a href="{{url('logout')}}" class="btn btn-default btn-flat">Keluar</a>
</div>
</li>
</ul>
</li>
</ul>
</div>
</nav>
</header>

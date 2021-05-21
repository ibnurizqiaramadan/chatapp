@include('layouts.head')
@include('layouts.js')
<div class="nanobar loadingGan" id="loadingGan" style="position: fixed;">
    <div class="bar"></div>
</div>
<div id="customCss"></div>
{{-- <body class="hold-transition sidebar-mini layout-fixed"> --}}
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		{{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light diem"> --}}
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-power-off"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
						<a href="#" class="dropdown-item" id="btnLogout">
							<i class="fas fa-sign-out-alt mr-2"></i> Logout
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="{{ base_url('chat') }}" class="brand-link">
				<img src="{{ base_url('assets/img/user.png') }}" alt="user Imgae"
					class="brand-image img-circle elevation-3">
				<span class="brand-text font-weight-light">Ibnu Rizqia Ramadan</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<div id="navSection">
					@include('layouts/nav')
				</div>
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			
			<!-- /.content-header -->
			<!-- Main content -->
			<section class="content pt-3" id="contentId">
				@yield('content')
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<form action="{{ base_url('chat/storeMessage') }}" id="formStoreMessage" method="post">
				<div class="input-group input-group">
					<input type="hidden" name="username" value="{{ $_SESSION['username'] }}">
					<input name="message" type="text" class="form-control" required>
					<span class="input-group-append">
						<button type="submit" id="btnKirimPesan" class="btn btn-primary btn-flat"><i class="fas fa-paper-plane"></i></button>
					</span>
				</div>
			</form>
			{{-- <div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 1.0.0
			</div> --}}
		</footer>
	</div>
	<!-- ./wrapper -->
</body>
</html>
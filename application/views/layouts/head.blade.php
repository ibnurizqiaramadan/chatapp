<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta property="og:title" content="Chat App">
    <meta property="og:description" content="Hanya sebuah aplikasi chat sederhana
    <meta property="og:image" content="{{getAssetsFiles('img/logo.png')}}">
    <meta property="og:url" content="{{ BASE_URL }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="baseUrl" content="{{ base_url() }}">
	<meta name="username" content="{{ $_SESSION['username'] ?? "" }}">
	<title class="webTitle">Chat App | {{ $title ?? 'Chat kuy' }}</title>
	<link rel="shortcut icon" type="image/jpg" href="{{ getAssetsFiles('img/logo.png') }}"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="{{ base_url('assets/style/') }}plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ base_url('assets/style/') }}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="{{ base_url('assets/style/') }}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="{{ base_url('assets/style/') }}dist/css/adminlte.min.css">
	<link rel="stylesheet" href="{{ base_url('assets/css/custom.css') }}">
@yield('head')
</head>
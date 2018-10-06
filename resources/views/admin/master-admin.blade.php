<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/style-admin.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/style-admin.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body style="background-color:black">
<div class="admin-box my-5">
	@yield('register')
	@yield('login')

</div>
</body>
</html>
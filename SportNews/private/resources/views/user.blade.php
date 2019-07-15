<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>News SPort Berita Olahraga Masa Kini</title>

    <!-- Favicon -->
    <link rel="icon" href="user/img/core-img/Sports.jpg">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('user/style.css')}}">

</head>

<body>
	    <div class="container">
		@include('usernav')
		@yield('main')
	</div>
	@yield('footer')

    <script src="{{asset('user/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('user/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('user/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('user/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('user/js/active.js')}}"></script>
</body>

</html>
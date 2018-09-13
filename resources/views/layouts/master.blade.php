<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Admin Login  :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href=" {{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/component.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/style_grid.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href=" {{ asset('css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href=" //fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>


	@include('layouts.header')
	
	@yield('home_page')

	@yield('crop_create')


	
</body>
{{-- js --}}
<script src=" {{ asset ('js/bars.js')}}"></script>
<script src="{{  asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('js/scripts.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>

	<!-- /amcharts -->
				<script src="{{ asset('js/amcharts.js')}}"></script>
		       <script src="{{ asset('js/serial.js')}}"></script>
				<script src="{{ asset('js/export.js')}}"></script>	
				<script src="{{ asset('js/light.js')}}"></script>

	<!-- //amcharts -->
		<script src="{{asset('js/chart1.js')}}"></script>
				<script src="{{ asset('js/Chart.min.js')}}"></script>
		<script src="{{ asset('js/modernizr.custom.js')}}"></script>
		
		<script src="{{ asset('js/classie.js')}}"></script>
		<script src="{{ asset('js/gnmenu.js')}}"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->
	@yield('crop_create')



</html>
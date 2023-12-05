<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="Brian Anikayi">
	<meta name="google-adsense-account" content="ca-pub-2582016512728310">
	<meta name="keywords" content="Music Box System">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('dash/img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Music Box System</title>

	<!-- <link href="css/app.css" rel="stylesheet"> -->
	<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
	<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <link href="{{asset('dash/css/app.css')}}" rel="stylesheet">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2582016512728310"
     crossorigin="anonymous"></script>

	<!-- <link href="{{asset('dash/css/cardsapp.css')}}" rel="stylesheet"> -->
	<!-- BEGIN SETTINGS -->

	<!-- BEGIN SETTINGS -->
	<!-- <script src="{{asset('dash/js/settings.js')}}"></script> -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body data-theme="light">
	<div class="wrapper">

        <!-- side bar start -->
              @include('musicians.inc.sidebar')
         <!-- side bar end -->

		<div class="main">

            <!-- top bar link -->

            @include('musicians.inc.header')
			
            <!-- end of top bar -->

            @yield('content')

			

            @include('musicians.inc.footer')
            
		</div>
	</div>

	
    <script src="{{asset('dash/js/app.js')}}"></script>
	<script src="{{asset('dash/js/datatables.js')}}"></script>
	<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
	<script type="text/javascript" src="auth/js/vanilla-tilt.js"></script>

	<script >
		$('.js-tilt').tilt({
			scale: 1.5
		})
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script>

	
	

</body>

</html>
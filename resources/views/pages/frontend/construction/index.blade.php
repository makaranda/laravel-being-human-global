<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->
    <link rel="icon" type="image/jpg" href="{{ url('public/assets/frontend/img/iwgc_main_favicon.jpg') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">


	<link href="{{ url('public/assets/comming-soon/common-css/ionicons.css') }}" rel="stylesheet">


	<link rel="stylesheet" href="{{ url('public/assets/comming-soon/common-css/jquery.classycountdown.css') }}" />

	<link href="{{ url('public/assets/comming-soon/07-comming-soon/css/styles.css') }}" rel="stylesheet">

	<link href="{{ url('public/assets/comming-soon/07-comming-soon/css/responsive.css') }}" rel="stylesheet">

</head>
<body>

	<div class="main-area center-text" style="background-image:url({{ url('public/assets/comming-soon/images/countdown-6-1600x900.jpg') }});" >

		<div class="display-table">
			<div class="display-table-cell">

				<h1 class="title"><b>Coming Soon</b></h1>
				<p class="desc font-white">Our website is currently undergoing scheduled maintenance.
					We will be back shortly. Thank you for your patience.</p>
				<!--
				<div class="email-input-area">
					<form method="post">
						<input class="email-input" name="email" type="text" placeholder="Enter your email"/>
						<button class="submit-btn" name="submit" type="submit"><b>NOTIFY US</b></button>
					</form>
				</div>
				-->
				<!-- email-input-area -->

				<div id="normal-countdown" data-date="2025/05/31"></div>
				<!--
				<ul class="social-btn">
					<li class="list-heading">Follow us for update</li>
					<li><a href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
				</ul>-->

			</div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->


	<!-- SCIPTS -->

	<script src="{{ url('public/assets/comming-soon/common-js/jquery-3.1.1.min.js') }}"></script>

	<script src="{{ url('public/assets/comming-soon/common-js/jquery.countdown.min.js') }}"></script>

	<script src="{{ url('public/assets/comming-soon/common-js/scripts.js') }}"></script>

</body>
</html>

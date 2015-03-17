<!--
	File: index.php
	Author: Bance Dev Team
-->

<?php session_start(); ?>

<!DOCTYPE xhtml>
<html>

<head> <!-- HEADER_BEGIN -->
	<title>Bounce</title>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
	<!--Import the Google+ Api's for logging in-->
	<script src="https://apis.google.com/js/client:platform.js" async defer></script>
	<script type="text/javascript"> on_index = true; </script>
</head> <!-- HEADER_END -->



<body class="blue-grey lighten-5"> <!-- BODY_BEGIN -->

	<main> <!-- MAIN_BEGIN -->
		<div class="row">
			<div class="col s4 red accent-2">a </div>
			<div class="col s4 purple lighten-4">
			<p class="center-align">potato</p>
			<img class="responsive-img" src="imgs/bounce_logo.png" style="max-width: 15%">
			<div class="col s12">
				<span id="signinButton"> <!-- GOOGLE+_SIGNIN_BEGIN -->
					<span
						class="g-signin"
						data-scope="email"
						data-callback="signinCallback"
						data-clientid="537601676254-jav0g2j7elm8epj2dkl05e10btam6mv6.apps.googleusercontent.com"
						data-cookiepolicy="single_host_origin"
						data-requestvisibleactions="http://schema.org/AddAction"
					</span>
				</span> <!-- GOOGLE+_SIGNIN_END -->
			</div>
			</div>
			<div class="col s4 red accent-2">a</div>
		</div>
	</main> <!-- MAIN_END -->

	<footer class="page-footer light-blue accent-4"> <!-- FOOTER_BEGIN -->
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text=lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Terms and Condidtions</li>
						<li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				&copy 2015 Bounce Dev Team
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer> <!-- FOOTER_END -->

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/verify_login.js"></script>

</body> <!-- BODY_END -->

</html>

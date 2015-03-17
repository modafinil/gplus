<?php
session_start();
?>

<!--
	File: main.php
	Author: Bance Dev Team
-->

<?php session_start(); ?>

<!DOCTYPE xhtml>
<html>

<head> <!-- HEADER_BEGIN -->
	<title>Bounce</title>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
	<!--Import the Google+ Api's for logging in-->
	<script src="https://apis.google.com/js/client:platform.js" async defer></script>
	<!-- Verify that user is logged in! -->
	<script type="text/javascript" src="../js/verify_login.js"></script>
</head> <!-- HEADER_END -->



<body class="blue-grey lighten-5"> <!-- BODY_BEGIN -->


	<span id="signinButton" style="display: none"> <!-- GOOGLE+_SIGNIN_BEGIN -->
		<span
			class="g-signin"
			data-scope="email"
			data-callback="signinCallback"
			data-clientid="537601676254-jav0g2j7elm8epj2dkl05e10btam6mv6.apps.googleusercontent.com"
			data-cookiepolicy="single_host_origin"
			data-requestvisibleactions="http://schema.org/AddAction"
		</span>
	</span> <!-- GOOGLE+_SIGNIN_END -->

	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">Bounce</a>
			<ul id="nav-mobile" class="right">
				<li><i class="mdi-action-exit-to-app" onclick="logout()"></i></li>
			</ul>
		</div>
	</nav>

<div class="container">
	<div class="row">
		<div class="col s3 grey lighten-5">
			<hr>
			<ul>
				<li><i class="mdi-action-open-in-browser"></i><a href="#!">Inbox</a></li>
				<li><i class="mdi-action-exit-to-app"></i><a href="#!">Upcoming</a></li>
				<li><i class="mdi-action-list"></i><a href="#!">All Tasks</a></li>
				<li><i class="mdi-action-done-all"></i><a href="#!">Completed</a></li>
				<li><i class="mdi-action-label-outline"></i><a href="#!">Unassigned</a></li>
			</ul>
			<hr>
			<h3>All Lists</h3>
			<ul>
				<li><a href="#!">Test List 1</a></li>
				<li><a href="#!">Test List 2</a></li>
				<li><a href="#!">Test List 3</a></li>
				<li><p>Add a new list (enter to submit)...</p></li>
			</ul>
		</div>
		<div id="response" class="hide">
			<textarea id="responseContainer" style="width:100%; height:150px"></textarea>
		</div>
	</div>
</div>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>

</body>


<script type="text/javascript">
function logout() {
	gapi.auth.signOut();
	location.reload();
}
</script>

</html>

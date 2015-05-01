<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="tp">
	<head>
		<!-- Base URL -->
		<base href="http://localhost/triadiprabowo/">
		<!-- Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Triadi Prabowo is passionate software developer focused on Web Development, likes to be creative and innovative and eager to acquire something new" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="canonical" href="http://www.triadiprabowo.com/" />
		<meta name="copyright" content="This website licensed under a Creative Commons Attribution-NonCommercial 4.0 International License" />
		<meta name="robots" content="index,follow" />
		<!-- Core -->
		<title ng-bind="title"></title>
		<link rel="shortcut icon" href="res/img/icon.png" />
		<!-- CSS -->
		<link rel="stylesheet" href="res/css/global.css" />
		<!-- Include CSS for 404 page -->
		<link rel="stylesheet" href="res/css/404.css">
		<link rel="stylesheet" href="res/css/hover.css" />
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />		

		<!-- Script Libraries -->
		<script src="res/js/jquery-1.10.2.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script src="res/js/angular.min.js"></script>
		<script src="res/js/angular-route.min.js"></script>
		<script src="res/js/tp-core.js"></script>
	</head>

	<body>	
	

	<div ng-view></div>

	<!-- Include Footer Page -->
	<?php
		include('footer.php');
	?>
	</body>
</html>
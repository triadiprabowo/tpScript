<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="tp">
	<head>
		<!-- Base URL -->
		<base href="http://localhost/triadiprabowo/">
		<!-- Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="I am passionate web developer and currently focused in Front End Developer Experiencing in jQuery, AngularJS and NodeJS with version control environment" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="canonical" href="http://www.triadiprabowo.com/" />
		<meta name="copyright" content="This website licensed under a Creative Commons Attribution-NonCommercial 4.0 International License" />
		<meta name="robots" content="index,follow" />
		<!-- Core -->
		<title ng-bind="title"></title>
		<link rel="shortcut icon" href="res/img/icon.png">
		<!-- CSS -->
		<link rel="stylesheet" href="res/css/global.css">
		<!-- Include CSS for 404 page -->
		<link rel="stylesheet" href="res/css/404.css">
		<!-- CSS Misc -->
		<link rel="stylesheet" href="res/css/hover.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">		
		<link rel="stylesheet" href="res/css/ngDialog.css">
		<!-- Script Libraries -->				
		<script src="res/js/jquery-1.10.2.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script src="res/js/angular.min.js"></script>
		<script src="res/js/angular-route.min.js"></script>
		<script src="res/js/ngDialog.js"></script>
		<script src="res/js/tp-ngcore.js"></script>
		<script src="res/js/tp-controller.js"></script>
		<!-- Google Analytic Script -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-55158435-2', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

	<body ng-controller="globalCtrl">
		<div class="tp-preload-pos"><p>Loading</p><img src="res/img/preload.gif" /></div>		
		<!-- Include mobile menu -->
		<?php include('sys/partials/mobile-menu.php') ?>

		<section class="tp-preload" style="display: none;">
			<!-- Mobile Toggle -->
			<div class="tp-mobile-menu-toggle-wrapper">
				<div class="tp-mobile-menu-toggle hvr-buzz"><span class="tp-icon fa-th-large"></span></div>
			</div>
			<!-- End Toggle -->	

			<section class="tp-preload-canvas">
				<!-- NgView -->
				<div ng-view></div>
			</section>
		</section>
	</body>
</html>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
	<title>ShotsFired Stream Team</title>
  <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
	<!--REQUIRED STYLE SHEETS-->
	<!-- BOOTSTRAP CORE STYLE CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLE CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<!-- CUSTOM STYLE CSS -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<!-- GOOGLE FONT -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--Header section  -->
	<div id="header">
		<?php include("header.html");?>
	</div>

	<!-- <iframe
	  frameborder="0" style="border:0; position: absolute;
    	top: 0; bottom: 0; left: 0; right: 0;  height: 100%; width: 100%;"
	  src="/home/shotsfired/minecraft/ftb_revelation_1.12/overviewer/ftb_revelation_1.12/api.html" allowfullscreen>
	</iframe> -->

	<div id="minecraft">
		<?php include("ftb_revelation_1.12/api.html");?>
	</div>

	<div id="footer">
		<?php include("footer.html");?>
	</div>
	<!--End footer Section -->
	<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
	<!-- CORE JQUERY  -->
	<script src="assets/plugins/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP CORE SCRIPT   -->
	<script src="assets/plugins/bootstrap.js"></script>
	<!-- PARALLAX SCRIPT   -->
	<script src="assets/plugins/4jquery.parallax-1.1.3.js"></script>
	<!-- CUSTOM SCRIPT   -->
	<script src="assets/js/custom.js"></script>
</body>
</html>

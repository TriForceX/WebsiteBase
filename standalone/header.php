<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $base->get('lang'); ?>">
<head>
	<!-- Main title -->
	<title><?php echo $base->get('title'); ?></title>
	<!-- HTML Charset -->
	<meta charset="<?php echo $base->get('charset'); ?>">
	<!-- Mobile Enable -->
	<meta http-equiv="X-UA-Compatible" content="<?php echo $base->get('ua-compatible'); ?>">
	<meta name="mobile-web-app-capable" content="<?php echo $base->get('mobile-capable'); ?>">
	<meta name="apple-mobile-web-app-capable" content="<?php echo $base->get('mobile-capable'); ?>">
	<meta name="viewport" content="<?php echo $base->get('viewport'); ?>">
	<!-- Nav Bar Mobile Color -->
	<meta name="theme-color" content="<?php echo $base->get('nav-color'); ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo $base->get('nav-color'); ?>">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $base->get('nav-color-apple'); ?>">
	<!-- Meta Details -->
	<meta name="description" content="<?php echo $base->get('description'); ?>">
	<meta name="keywords" content="<?php echo $base->get('keywords'); ?>">
	<meta name="author" content="<?php echo $base->get('author'); ?>">
	<!-- Scripts & Stylesheets -->
	<link href="css/something-1.css" rel="stylesheet">
	<link href="css/something-2.css" rel="stylesheet">
	<link href="css/something-3.css" rel="stylesheet">
	
</head>
<body>
<!-- Header -->
<header>
	<!-- Header Container  -->
	<div class="container">
		Header Content
	</div>
	<!-- Header Container (End) -->
</header>
<!-- Header (End) -->
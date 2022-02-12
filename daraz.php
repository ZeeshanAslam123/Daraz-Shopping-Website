<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/frontend.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title><?php echo _( 'Daraz' ); ?></title>

	<?php 
	define( 'DRZ_ASSETS_URL', 'assets/' );
	define( 'DRZ_INCLUDES_URL', 'includes/' );
	define( 'DRZ_IMAGES_URL', 'assets/images/' );
	define( 'DRZ_SLIDER_IMAGES_URL', 'assets/images/slider-images/' );

	require 'templates-includes.php';
	?>

</head>
<body>

	<!-- Create Header -->
	<?php echo get_header_content_html(); ?>
	<!-- End create Header -->

	<!-- Start Slider section -->
	<?php echo get_slider_content_html(); ?>
	<!-- End Slider section -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/frontend.js"></script>
</body>
</html>
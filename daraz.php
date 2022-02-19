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
	define( 'DRZ_DIR', substr( dirname(__FILE__), strlen( $_SERVER['DOCUMENT_ROOT'] ) ).'/' );
	define( 'DRZ_ASSETS_URL', DRZ_DIR.'assets/' );
	define( 'DRZ_INCLUDES_URL', DRZ_DIR.'includes/' );
	define( 'DRZ_IMAGES_URL', DRZ_ASSETS_URL.'images/' );
	define( 'DRZ_SLIDER_IMAGES_URL', DRZ_IMAGES_URL.'slider-images/' );
	define( 'DRZ_PRODUCT_URL', DRZ_IMAGES_URL.'products/' );
	define( 'DRZ_ELECTRONICS_URL', DRZ_PRODUCT_URL.'Electronics/' );

	require 'templates-includes.php';
	?>

</head>
<body>

	<!-- Create Header -->
	<?php get_header_content_html(); ?>
	<!-- End create Header -->

	<!-- Start Slider section -->
	<?php get_slider_content_html(); ?>
	<!-- End Slider section -->

	<!-- Start product section -->
	<?php get_products_html_content(); ?>
	<!-- End product section -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/frontend.js"></script>
</body>
</html>
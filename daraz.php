<?php 
require 'daraz-styles.php'; 


?>
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

	<?php require 'daraz-scripts.php'; ?>

</body>
</html>
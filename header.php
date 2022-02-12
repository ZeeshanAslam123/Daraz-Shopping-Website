<?php
/**
 * Header Template
 */

function get_header_content_html() {

	?>
	<header>
		<div class="drz-header-wrap">
			
			<!-- Create first header -->	
			<div class="drz-first-header-wrap">
				<div class="drz-first-header-content">
					<a href="#">SAVE MORE ON APP</a>
					<a href="#">DARAZ AFFILIATE PROGRAM</a>
					<a href="#">SELL ON DARAZ</a>
					<a href="#">CUSTOMER CARE</a>
					<a href="#">TRACK MY ORDER</a>
					<a href="#">LOGIN</a>
					<a href="#">SIGNUP</a>
					<a href="#">زبان تبدیل کریں</a>
				</div>
			</div>
			<!-- End create first header -->

			<!-- Create second header -->	
			<div class="drz-second-header-wrap">
				<div class="drz-second-header-content">
					<div class="drz-s-h-content-wrap">
						<img src="<?php echo DRZ_IMAGES_URL.'daraz-logo.png';?>" class="daraz-logo">
						<input type="text" name="" placeholder="Search in Daraz" class="drz-search-bar">
						<i class="fa fa-search drz-search-icon"></i>
						<i class="fa fa-shopping-cart drz-cart-icon"></i>
						<img src="<?php echo DRZ_IMAGES_URL.'side-logo.png'; ?>" class="drz-side-logo">
					</div>
				</div>
			</div>
			<!-- End create second header -->

		</div>
	</header>
	<?php
}
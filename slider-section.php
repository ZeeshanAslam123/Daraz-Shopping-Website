<?php
/**
 * Slider template html
 */

function get_slider_content_html() {

	?>
	<div class="drz-slider-section">
		<div class="drz-slide-menu-section">
			<div class="drz-slider-color"></div>
			<div class="drz-slider-down-menu">
				<ul>
					<li>Electronic Devices</li>
					<li>Electronic Accessories</li>
					<li>TV & Home Appliances</li>
					<li>Health & Beauty</li>
					<li>Babies & Toys</li>
					<li>Gloceries & Pets</li>
					<li>Home & Lifestyle</li>
					<li>Woman's Fashion</li>
					<li>Man's Fashion</li>
					<li>Watches Bags & Jewellery</li>
					<li>Sport & Outdoor</li>
					<li>Automotice & Motorbike</li>
				</ul>
			</div>
		</div>
		<div class="drz-slider-wrap">
			<img src="assets/images/slider-images/image1.jpg" class="drz-slider-images drz-slider-image-1">
		</div>
		<div class="drz-slider-dots-wrap" data-images-url="<?php echo DRZ_SLIDER_IMAGES_URL; ?>">
			<div class="drz-slider-dots" data-image="1"></div>
			<div class="drz-slider-dots" data-image="2"></div>
			<div class="drz-slider-dots" data-image="3"></div>
			<div class="drz-slider-dots" data-image="4"></div>
			<div class="drz-slider-dots" data-image="5"></div>
			<div class="drz-slider-dots" data-image="6"></div>
			<div class="drz-slider-dots" data-image="7"></div>
			<div class="drz-slider-dots" data-image="8"></div>
			<div class="drz-slider-dots" data-image="9"></div>
		</div>
	</div>
	<?php
}
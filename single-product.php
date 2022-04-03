<?php 
require 'daraz-styles.php';

$image_url = isset( $_GET['product_image'] ) ? $_GET['product_image'] : '';
$product_title = isset( $_GET['product_name'] ) ? $_GET['product_name'] : '';
$selling_price = isset( $_GET['selling_price'] ) ? $_GET['selling_price'] : '';
$product_currency = isset( $_GET['product_currency'] ) ? $_GET['product_currency'] : '';
$product_price = isset( $_GET['product_price'] ) ? $_GET['product_price'] : '';
$product_discount = isset( $_GET['product_discount'] ) ? $_GET['product_discount'] : '';

?>

<body>

	<!-- Create Header -->
	<?php  get_header_content_html(); ?>
	<!-- End create Header -->

	<div class="drz-single-product-wrap">
		<div class="drz-single-product-image">
			<div class="drz-main-image">
				<img src="<?php echo $image_url; ?>">
			</div>
			<div class="drz-other-images">
				<img src="<?php echo $image_url; ?>">
				<img src="<?php echo $image_url; ?>">
				<img src="<?php echo $image_url; ?>">
				<img src="<?php echo $image_url; ?>">
			</div>
		</div>
		<div class="drz-product-info">
			<div class="single-flash-sell">
				<img src="<?php echo DRZ_ELECTRONICS_URL.'flash-sale.png'; ?>">
			</div>
			<div class="single-product-title"><?php echo $product_title; ?></div>
			<div class="single-product-price">
				<span class="drz-currency"><?php echo $product_currency; ?></span>
			    <span class="drz-price"><?php echo $selling_price; ?></span>
			</div>
			<div class="single-product-origin-price">
    			<span class="cross-mark">
    				<span class="drz-currency"><?php echo $product_currency; ?></span>
    				<span class="drz-price"><?php echo $product_price; ?></span>
    			</span>
    			<span class="drz-discount"><?php echo '-'.$product_discount; ?></span>
    		</div>
    		<div class="drz-quantity">
    			<div class="drz-quantity-tile">Quantity</div>
    			<span>-</span>
    			<span>1</span>
    			<span>+</span>
    		</div>
    		<div class="drz-cart-button">
    			<button class="drz-buy-now-btn">Buy Now</button>
    			<button class="drz-add-to-cart">Add to Cart</button>
    		</div>
		</div>
		<div class="drz-product-detail">
			<div class="drz-delivery-text">Delivery</div>
			<div class="drz-delivery-address">
				<i class="fa fa-map-marker"></i>
				<span class="address">Sindh, Karachi - Gulshan-e-Iqbal, Block 15</span>
			</div>
			<div class="drz-delivery-options">
				<div class="drz-delivery-days">
					<span class="drz-home-text"><i class="fa fa-book"></i>Home Delivery</span>
					<span class="drz-days-text">3 - 5 day(s)</span>
				</div>
				<div class="drz-delivery-price"><?php echo $product_currency; ?>69</div>
			</div>
			<div class="drz-shipping">
				<div class="drz-shipping-text">Enjoy free shipping promotion with minimum spend of Rs. 1,500 from</div>
				<div class="drz-shipping-accessory">Accessory HUB 7.</div>
			</div>
			<div class="delivery-available">
				<i class="fa fa-money"></i>
				<span class="delivery-available-text">Cash on Delivery Available</span>
			</div>
			<div class="drz-services">
				<div class="drz-services-text">Service</div>
				<div class="drz-services-days">
					<span class="drz-return-day"><i class="fa fa-clock-o"></i>7 Days Returns</span>
					<div class="drz-applicable-text">Change of mind is not applicable</div>
				</div>
			</div>
			<div class="drz-warranty">
				<div class="drz-services-days">
					<span class="drz-return-day"><i class="fa fa-exclamation-triangle"></i>Warranty not available</span>
				</div>
			</div>
			<div class="drz-services">
				<div class="drz-services-text">Sort by</div>
				<div class="drz-services-days">
					<span class="drz-return-day">Accessory HUB 7</span>
				</div>
			</div>
			<div class="drz-other-percentages">
				<div class="rating">Positive Seller Ratings</div>
				<div class="percentage">79%</div>
			</div>
			<div class="drz-other-percentages">
				<div class="rating">Ship on Time</div>
				<div class="percentage">100%</div>
			</div>
			<div class="drz-other-percentages">
				<div class="rating">Chat Response Rate</div>
				<div class="percentage">97%</div>
			</div>
		</div>
		<div class="drz-clear-both"></div>
		<div class="drz-product-detail-info">
			<div class="drz-product-detail-text">
				<h4>Product details of <?php echo $product_title; ?> Supported all mobile phones</h4>
				<div class="drz-product-detail-list">
					<li>Acoustic Sound Quality</li>
					<li>HD Call Quality</li>
					<li>Noise Isolation</li>
				</div>
				<div class="drz-product-detail-list">
					<li>3.5mm Universal Jack</li>
					<li>1.2m Long High Quality Wire</li>
				</div>
				<div class="drz-clear-both"></div>
				<h6>In Ear Headphone Answer and End Calls No Volume Control Compatible with multiple devices Lightweight and comfortable. Rich Design</h6>
			</div>
		</div>
	</div>

	<?php require 'daraz-scripts.php'; ?>

</body>
</html>
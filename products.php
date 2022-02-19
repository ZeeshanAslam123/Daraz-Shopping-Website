<?php

function get_products_html_content() {

	?>
	<div class="drz-page-background">
		
		<div class="drz-card-header">
		    <h3 class="drz-card-title">Flash Sale</h3>
		</div>

		<?php 
		$products_list = get_electronics_product_data();
		if( $products_list && is_array( $products_list ) ) {

			?>
			<!-- Get Product html content -->
			<div class="drz-product-wrap">
			<?php
			foreach( $products_list as $product_id => $product_data ) {

				$product_name = $product_data['product_name'];
				$product_image = $product_data['product_image'];

				?>
				<a href="#" class="drz-product-link">
			    	<div class="drz-product-box">
			    		<div class="drz-product-image">
			    			<img src="<?php echo $product_image; ?>">
			    		</div>
			    		<div class="drz-product-title"><?php echo $product_name; ?></div>
			    		<div class="drz-product-prices">
			    			<span class="drz-currency">Rs.</span>
			    			<span class="drz-price">197</span>
			    		</div>
			    		<div class="drz-product-origin-prices">
			    			<span class="cross-mark">
			    				<span class="drz-currency">Rs.</span>
			    				<span class="drz-price">599</span>
			    			</span>
			    			<span class="drz-discount">-70%</span>
			    		</div>
			    	</div>
			    </a>
				<!-- End Product html content -->
				<?php
			}
			?>
			</div>
			<?php
		}
		?>

	</div>
	<?php
}

/**
 * Get Product Data
 */
function get_electronics_product_data() {

	$products_list = [];

	$products_list = [ 
		101		=>	[ 
			'product_name' 		=> 'Flash Drive OTG',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'flash-drive-otg.jpg'
		],
		102		=> 	[ 
			'product_name' 		=> 'Head Phone',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'headphone.jpg'
		],
		103		=> 	[ 
			'product_name' 		=> 'Power Bank',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'powerbank.jpg'
		],
		104		=> 	[ 
			'product_name' 		=> 'Smart Watch',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'smart-watch.jpg'
		],
		105		=> 	[ 
			'product_name' 		=> 'USB Charger',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'usb-charger.jpg'
		],
		106		=> 	[ 
			'product_name' 		=> 'USB',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'usb.jpg'
		],
		107		=> 	[ 
			'product_name' 		=> 'USB',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'flash-drive-otg.jpg'
		],
		108		=> 	[ 
			'product_name' 		=> 'USB',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'flash-drive-otg.jpg'
		],
		109		=> 	[ 
			'product_name' 		=> 'USB',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'flash-drive-otg.jpg'
		],
		110		=> 	[ 
			'product_name' 		=> 'USB',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'flash-drive-otg.jpg'
		]
	];

	return $products_list;
}
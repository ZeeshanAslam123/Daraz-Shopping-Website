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
				$product_currency = $product_data['product_currency'];
				$product_price = $product_data['product_price'];
				$product_discount = $product_data['product_discount'];
				$selling_price = $product_price - ( $product_price * ( $product_discount / 100) );

				$single_product_url = DRZ_DIR.'single-product.php?product_id='.$product_id.'
				&product_name='.$product_name.'&product_image='.$product_image.'
				&product_price='.$product_price.'&product_discount='.$product_discount.'
				&selling_price='.$selling_price.' ';

				?>
				<a href="<?php echo $single_product_url; ?>" target="_blank" class="drz-product-link">
			    	<div class="drz-product-box">
			    		<div class="drz-product-image">
			    			<img src="<?php echo $product_image; ?>">
			    		</div>
			    		<div class="drz-product-title"><?php echo $product_name; ?></div>
			    		<div class="drz-product-prices">
			    			<span class="drz-currency"><?php echo $product_currency; ?></span>
			    			<span class="drz-price"><?php echo $selling_price; ?></span>
			    		</div>
			    		<div class="drz-product-origin-prices">
			    			<span class="cross-mark">
			    				<span class="drz-currency"><?php echo $product_currency; ?></span>
			    				<span class="drz-price"><?php echo $product_price; ?></span>
			    			</span>
			    			<span class="drz-discount"><?php echo '-'.$product_discount; ?></span>
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
			'product_image' 	=> DRZ_ELECTRONICS_URL.'flash-drive-otg.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 557,
			'product_discount'	=> 50

		],
		102		=> 	[ 
			'product_name' 		=> 'Head Phone',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'headphone.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 1000,
			'product_discount'	=> 70
		],
		103		=> 	[ 
			'product_name' 		=> 'Power Bank',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'powerbank.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 800,
			'product_discount'	=> 70
		],
		104		=> 	[ 
			'product_name' 		=> 'Smart Watch',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'smart-watch.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 300,
			'product_discount'	=> 70
		],
		105		=> 	[ 
			'product_name' 		=> 'USB Charger',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'usb-charger.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 200,
			'product_discount'	=> 70
		],
		106		=> 	[ 
			'product_name' 		=> 'USB',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'usb.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 600,
			'product_discount'	=> 70
		],
		107		=> 	[ 
			'product_name' 		=> 'Fast Brush',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'fast-brush.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 1200,
			'product_discount'	=> 70
		],
		108		=> 	[ 
			'product_name' 		=> 'Mini Vaccum',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'mini-vaccum.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 1800,
			'product_discount'	=> 70
		],
		109		=> 	[ 
			'product_name' 		=> 'Washing Machine',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'washing-machine.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 2000,
			'product_discount'	=> 70
		],
		110		=> 	[ 
			'product_name' 		=> 'Weight Machine',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'weight-machine.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 3000,
			'product_discount'	=> 70
		],
		111		=> 	[ 
			'product_name' 		=> 'Mouse',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'mouse.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 500,
			'product_discount'	=> 70
		],
		112		=> 	[ 
			'product_name' 		=> 'Sealine Strip',
			'product_image' 	=> DRZ_ELECTRONICS_URL.'sealing-strip.jpg',
			'product_currency'	=> 'RS.',
			'product_price'		=> 750,
			'product_discount'	=> 70
		]
	];

	return $products_list;
}
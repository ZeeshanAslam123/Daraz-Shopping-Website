<?php

require 'daraz-styles.php';

?>
<body>
	
	<!-- Create Header -->
	<?php  get_header_content_html(); ?>
	<!-- End create Header -->

	<!-- Create Sign up form -->
	<div class="drz-sign-up-main-wrap">
		<div class="drz-sign-up-heading-row">
			<div class="drz-create-account-heading">
				<span>Create your Daraz Account</span>
			</div>
			<div class="drz-already-member">
				<span>Already member? <a href="#" class="drz-login">Login </a>here</span>
			</div>
		</div>

		<div class="drz-sign-up-form">
			<div class="drz-sign-up-wrap">
				<div class="drz-sign-up-form-fields">
					<label>Phone Number*</label>
					<input type="text" name="drz_sign_up_phone_number" placeholder="Please enter your phone number">
				</div>
				<div class="drz-sign-up-form-fields">
					<label>Password*</label>
					<input type="text" name="drz_sign_up_password" placeholder="Minimum 6 characters with a number and a letter">
				</div>
				<div class="drz-sign-up-form-fields">
					<label class="drz-left">Birthday</label>
					<label class="drz-right">Gender</label>
					<div class="drz-clear-both"></div>
					<select name="drz_month" class="drz-modern-select">
						<option>Month</option>
						<option>January</option>
					</select>
					<select name="drz_month" class="drz-modern-select">
						<option>Day</option>
						<option>01</option>
					</select>
					<select name="drz_month" class="drz-modern-select">
						<option>Year</option>
						<option>2022</option>
					</select>
					<select name="drz_month" class="drz-modern-select">
						<option>Select</option>
						<option>male</option>
						<option>female</option>
					</select>
				</div>
			</div>

			<div class="drz-sign-up-wrap">
				<div class="drz-sign-up-form-fields">
					<label>Full name*</label>
					<input type="text" name="drz_sign_up_phone_number" placeholder="Please enter your phone number">
				</div>
				<div class="drz-sign-up-form-fields drz-sign-up-form-info">
					<input type="checkbox" name="drz_sign_up_checkbox" class="drz-sign-up-checked">
					<span class="drz-receive-offer-desc">I want to receive exclusive offers and promotions from Daraz.</span>
				</div>
				<div class="drz-sign-up-form-fields">
					<input type="submit" value="SIGN UP" class="drz-sign-up-button" name="drz_sign_up_button">
				</div>
				<div class="drz-sign-up-form-fields drz-sign-up-term-policy">
					<span class="drz-receive-offer-desc">By clicking “SIGN UP”, I agree to Daraz's <a href="" class="term-of-use">Terms of Use</a> and <a href="" class="privacy-policy">Privacy Policy </a></span>
				</div>
				<div class="drz-sign-up-form-fields">
					<span class="drz-receive-offer-desc">Or, sign up with</span>
				</div>
				<div class="drz-sign-up-form-fields">
					<input type="submit" value="Sign up with Email" class="drz-sign-up-email-button" name="drz_sign_up_button">
				</div>
				<div class="drz-sign-up-form-fields">
					<div class="drz-external-sign-up drz-facebook-sign-up">
						<i class="fa fa-facebook drz-external-sign-up-icon" aria-hidden="true"></i>
						<span>Facebook</span>
					</div>
					<div class="drz-external-sign-up drz-google-sign-up">
						<i class="fa fa-google-plus drz-external-sign-up-icon" aria-hidden="true"></i>
						<span>Google</span>
					</div>
				</div>
			</div>
			<div class="drz-clear-both"></div>
		</div>

	</div>
	<!-- End Create Sign up form -->

	<?php require 'daraz-scripts.php'; ?>

</body>
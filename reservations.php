<html>
<?php include "includes/head.php";?>
<body>
<?php include "includes/header.php";?>
<section id="reservations">
	<div class="container">
		<div class="under_header_img">
			<img src="img/check_list_under_header_img.jpg">
		</div>
		<div class="page_title">
			<p class="text_uppercase text-center">checkout</p>
		</div>
	</div>

	<div class="main_container w1170 clearfix">

		<div class="title col-8">
			<h3 class="text-center text_uppercase p20-0">billing details</h3>
		</div>

		<form id="js_bill" class="p20-0 clearfix">

			<div class="form-field col-4 left p0-15">
				<label for="first_name" class="text_uppercase p20-0 block left">first name</label>
				<div class="input_wrapper">
					<input id="first_name" class="w100p" type="text" name="first_name"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="last_name"  class="text_uppercase p20-0 block left">last name</label>
				<div class="input_wrapper">
					<input id="last_name" class="w100p" type="text" name="last_name"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="company_name" class="text_uppercase p20-0 block left">company name</label>
				<div class="input_wrapper">
					<input id="company_name" class="w100p" type="text" name="company_name"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="email" class="text_uppercase p20-0 block left">e-mail</label>
				<div class="input_wrapper">
					<input id="email" class="w100p" type="text" name="email"
						   data-rule-required="true" data-msg-required="This field is required"
						   data-rule-email="true" data-email-required="Please enter a valid email address"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="phone" class="text_uppercase p20-0 block left">phone</label>
				<div class="input_wrapper">
					<input id="phone" class="w100p" type="text" name="phone"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="postcode-zip" class="text_uppercase p20-0 block left">postcode-zip</label>
				<div class="input_wrapper">
					<input id="postcode-zip" class="w100p" type="text" name="postcode-zip"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="country" class="text_uppercase p20-0 block left">country</label>
				<div class="input_wrapper">
					<input id="country" class="w100p" type="text" name="country"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="city" class="text_uppercase p20-0 block left">city</label>
				<div class="input_wrapper">
					<input id="city" class="w100p" type="text" name="city"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="form-field col-4 left p0-15">
				<label for="address" class="text_uppercase p20-0 block left">address</label>
				<div class="input_wrapper">
					<input id="address" class="w100p" type="text" name="address"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
			</div>

			<div class="check_btn text-center left w100p">
				<button type="submit" class="text_uppercase">checkout</button>
			</div>

		</form>

		<div class="pay_cards_wrapper">

			<div class="title col-8">
				<h3 class="text-center text_uppercase p20-0">chose a payment method</h3>
			</div>

			<div class="pay_cards row">

				<div class="col-3 left p0-10">
					<img src="img/card_pay_pal.jpg">
				</div>

				<div class="col-3 left p0-10">
					<img src="img/card_mastercard.jpg">
				</div>

				<div class="col-3 left p0-10">
					<img src="img/card_american.jpg">
				</div>

				<div class="col-3 left p0-10">
					<img src="img/card_visa.jpg">
				</div>
			</div>


		</div>
	</div>
</section>
<?php include "includes/footer.php";?>


<script>

	$(function() {

		$("#js_bill").validate();

	});

</script>

</body>
</html>
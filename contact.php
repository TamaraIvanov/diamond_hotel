<html>
<?php include "includes/head.php";?>
<body>

<?php include "includes/header.php";?>
<div id="contact">
	<section class="slider_under_header">
		<div class="under_header_img">
			<img src="img/contact_under_header.jpg">
		</div>
		<div class="page_title">
			<p class="text_uppercase text-center">contact</p>
		</div>
	</section>

	<section id="contact_form" class="clearfix w1170">

		<div class="main_title_service relative">
			<h2>Enjoy your stay with us</h2>
			<img class="absolute" src="img/logo_small.png">
		</div>

		<div id="map"></div>

		<div class="contact_form col-6 left">
			<form id="js_contact_form" class="" method="post" action="">
				<div class="w100p form-field">
					<label for="full_name">Full Name<span>*</span></label>
					<input id="full_name" class="w100p" type="text" name="full_name"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
				<div class="w100p form-field">
					<label for="email">E-Mail<span>*</span></label>
					<input id="email" class="w100p" type="text" name="email"
						   data-rule-required="true" data-msg-required="This field is required"
						   data-rule-email="true" data-email-required="Please enter a valid email address" />
				</div>
				<div class="w100p form-field">
					<label for="company_name">Company Name</label>
					<input id="company_name" class="w100p" type="text" name="company_name"
						   data-rule-required="true" data-msg-required="This field is required"/>
				</div>
				<div class="w100p form-field">
					<label for="message">Message</label>
					<textarea id="message" class="w100p" name="message" data-rule-required="true" data-msg-required="This field is required"></textarea>
				</div>
				<button class="text_uppercase">send</button>
			</form>
		</div>


		<div class="find_us col-6 left p20">
			<div class="contact_wrapper">
				<address class="text_uppercase w100p p10-0">1333 Brickell Ave, Miami, FL</address>
				<a class="color_b w100p p10-0" href="mailto:info@diamondhotel.com">info@diamondhotel.com</a>
				<a class="w100p p10-0" href="tel:+3 653-306-6100">+3 653-306-6100</a>
			</div>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales id nunc eget posuere.Nunc fermentum porta elementum. Ut tempus fringilla tincidunt. Suspendisse mattis scelerisque finibus. </p>
		</div>
	</section>


</div>


<?php include "includes/footer.php";?>

<script>

	$(function() {

		$("#js_contact_form").validate();
	});

	var map;

	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: {lat: 38.449785, lng: -105.223311}
		});

		var marker = new google.maps.Marker({
			map: map,
			// Define the place with a location, and a query string.
			place: {
				location: {lat: 38.449785, lng: -105.223311},
				query: 'Companty'

			},
			// Attributions help users find your site again.
			attribution: {
				source: 'Google Maps JavaScript API',
				webUrl: 'https://developers.google.com/maps/'
			}
		});

		// Construct a new InfoWindow.
		var infoWindow = new google.maps.InfoWindow({
			content: '<b>eeee </b><br> eeee'
		});

		// Opens the InfoWindow when marker is clicked.
		marker.addListener('click', function() {
			infoWindow.open(map, marker);
		});
	}

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwxem7oINL8qvoUw8eufRgdQ4mbYae0i4&callback=initMap"></script>

</body>
</html>



























</body>
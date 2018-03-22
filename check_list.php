<html>
<?php include "includes/head.php";?>
<body>
<?php include "includes/header.php";?>
<section id="check_list">
	<div class="under_header_img">
		<img src="img/check_list_under_header_img.jpg">
	</div>
	<div class="page_title">
		<p class="text_uppercase text-center">rooms</p>
	</div>
	<div class="main_container w1170 clearfix">

		<div class="filters relative js_drop_down_btn text-center p10-0">

			<button type="button" class="filter_btn js-drop-btn no-display"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>

			<ul id="offer_menu" class="clearfix w100p  js-drop-list text-center">
				<li class="active" data-id="all">All</li>
				<li class="" data-id="apartments">Apartments</li>
				<li data-id="double">Double Room</li>
				<li data-id="single">Single Room</li>
				<li data-id="family">Family Room</li>
			</ul>
		</div>

		<div class="offer_container clearfix">

			<div class="offer relative col-4 left" data-type="double">
				<a href="room_details_honeymoon.php"><img src="img/room1.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$300</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Honeymoon Room</h3>
                        <a href="room_details_honeymoon.php">Book Now</a>
					</div>
				</div>
			</div>

			<div class="offer relative col-4 left" data-type="apartments">
				<a href="room_details_presidential.php"><img src="img/room2.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$1000</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Presidential Suite</h3>
                        <a href="room_details_presidential.php">Book Now</a>
					</div>
				</div>
			</div>

			<div class="offer relative col-4 left" data-type="apartments">
				<a href="room_details_apartments.php"><img src="img/room3.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$400</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Apartment</h3>
                        <a href="room_details_apartments.php">Book Now</a>
					</div>
				</div>
			</div>


			<div class="offer relative col-4 left" data-type="apartments">
				<a href="room_details_family.php"><img src="img/room4.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$350</span>
					<span class="block t_center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Family Room</h3>
                        <a href="room_details_family.php">Book Now</a>
					</div>
				</div>
			</div>

			<div class="offer relative col-4 left" data-type="double">
				<a href="room_details_luhury.php"><img src="img/room5.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$500</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Luhury Room</h3>
                        <a href="room_details_luhury.php">Book Now</a>
					</div>
				</div>
			</div>

			<div class="offer relative col-4 left" data-type="double">
				<a href="room_details_standard.php"><img src="img/room6.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$200</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Standard Room</h3>
                        <a href="room_details_standard.php">Book Now</a>
					</div>
				</div>
			</div>


			<div class="offer relative col-4 left" data-type="double">
				<a href="room_details_standards.php"><img src="img/room7.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$200</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Standard Room</h3>
                        <a href="room_details_standards.php">Book Now</a>
					</div>
				</div>
			</div>

			<div class="offer relative col-4 left" data-type="single">
				<a href="room_details_single.php"><img src="img/room8.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$150</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Single Room</h3>
                        <a href="room_details_single.php">Book Now</a>
					</div>
				</div>
			</div>

			<div class="offer relative col-4 left" data-type="double">
				<a href="room_details_luhurys.php"><img src="img/room9.jpg"></a>
				<div class="price absolute top0">
					<span class="block text-center">$500</span>
					<span class="block text-center">per night</span>
				</div>
				<div class="offer_name_wrapper relative">
					<div class="offer_name w100p text-center absolute p10-0">
						<h3 class="p20-0">Luhury Room</h3>
                        <a href="room_details_luhurys.php">Book Now</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php include "includes/footer.php";?>

<script src="js/filtering_offer.js"></script>

</body>
</html>
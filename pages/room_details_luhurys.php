<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/logo_small.png"/>
	<title>Diamond Hotel Home</title>
</head>
<body>
<?php include "../includes/header.php";?>
<section id="room_details">
	<div class="under_header_img">
		<img src="../img/check_list_under_header_img.jpg">
	</div>
	<div class="page_title">
		<p class="text_uppercase text-center">rooms</p>
	</div>
	<div class="main_container w1170 clearfix">

		<div class="filters relative text-center p10-0">

			<button type="button" class="filter_btn js_drop_down_btn no-display"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>

			<ul id="offer_menu" class="js_drop_down clearfix w100p text-center">
				<li>All</li>
				<li>Apartments</li>
				<li>Double Room</li>
				<li>Single Room</li>
				<li>Family Room</li>
			</ul>

		</div>

		<div class="room_details_wrapper row">


			<div class="col-6 left">
				<img src="../img/room9.jpg">
			</div>

			<div class="col-6 left">

				<div class="clearfix">
					<h3 class="left">Luhury Room</h3>
					<span class="right p0-5">$500 per night</span>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida semper augue, vitae suscipit velit rutrum eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam fermentum dignissim mi, eget faucibus felis ultrices ac.</p>
				<ul class="clearfix">
					<li class="col-4 left">Double bed</li>
					<li class="col-4 left">Free Lunch & Dinner</li>
					<li class="col-4 left">Free Wifi</li>
					<li class="col-4 left">Room service</li>
					<li class="col-4 left">Satellite channels</li>
					<li class="col-4 left">Wake-up  service</li>
				</ul>
			</div>
		</div>

		<div class="similar">

			<div class="main_title_service relative text-center">
				<h2>Similar offers</h2>
				<img class="absolute" src="../img/logo_small.png">
			</div>

			<div class="similar_rooms_wrapper relative">
				<div class="offer_container clearfix">


					<div class="offer_similar col-6 left">

						<div class="offer relative left">
							<a href="room_details_honeymoon.php"><img src="../img/room1.jpg"></a>
							<div class="price absolute top0">
								<span class="blocktext-center">per night</span>
							</div>
							<div class="offer_name_wrapper relative">
								<div class="offer_name w100p text-center absolute">
									<h3 class="p20-0">Honeymoon Room</h3>
									<button type="button">Book Now</button>
								</div>
							</div>
						</div>

						<div class="offer relative left">
							<a href="room_details_apartments.php"><img src="../img/room3.jpg"></a>
							<div class="price absolute top0">
								<span class="block text-center">$400</span>
								<span class="block text-center">per night</span>
							</div>
							<div class="offer_name_wrapper relative">
								<div class="offer_name w100p text-center absolute">
									<h3 class="p20-0">Apartment</h3>
									<button type="button">Book Now</button>
								</div>
							</div>
						</div>

					</div>

					<div class="offer_similar col-6 left">

						<div class="offer relative left">
							<a href="room_details_presidential.php"><img src="../img/post1.jpg"></a>
							<div class="price absolute top0">
								<span class="block text-center">$1000</span>
								<span class="block text-center">per night</span>
							</div>
							<div class="offer_name_wrapper relative">
								<div class="offer_name w100p text-center absolute">
									<h3 class="p20-0">Presidential Suite</h3>
									<button type="button">Book Now</button>
								</div>
							</div>
						</div>


						<div class="offer relative left">
							<a href="room_details_family.php"><img src="../img/room4.jpg"></a>
							<div class="price absolute top0">
								<span class="block text-center">$350</span>
								<span class="block text-center">per night</span>
							</div>
							<div class="offer_name_wrapper relative">
								<div class="offer_name w100p text-center absolute">
									<h3 class="p20-0">Family Room</h3>
									<button type="button">Book Now</button>
								</div>
							</div>
						</div>
					</div>

					<div class="offer_similar col-6 left">

						<div class="offer relative left">
							<a href="room_details_honeymoon.php"><img src="../img/room1.jpg"></a>
							<div class="price absolute top0">
								<span class="block text-center">$300</span>
								<span class="block text-center">per night</span>
							</div>
							<div class="offer_name_wrapper relative">
								<div class="offer_name w100p t_center absolute">
									<h3 class="p20-0">Honeymoon Room</h3>
									<button type="button">Book Now</button>
								</div>
							</div>
						</div>

						<div class="offer relative left">
							<a href="room_details_apartments.php"><img src="../img/room3.jpg"></a>
							<div class="price absolute top0">
								<span class="block text-center">$400</span>
								<span class="block text-center">per night</span>
							</div>
							<div class="offer_name_wrapper relative">
								<div class="offer_name w100p text-center absolute">
									<h3 class="p20-0">Apartment</h3>
									<button type="button">Book Now</button>
								</div>
							</div>
						</div>

					</div>

				</div>

				<div class="slider-button-wrapper">
					<button class="slider_arrow_previous slide-buttons absolute" type="button" data-type="prev"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></button>
					<button class="slider_arrow_next slide-buttons absolute" type="button" data-type="next"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></button>
				</div>

				<ul class="slider_dots clearfix text-center">
					<li class="left"></li>
					<li class="left"></li>
					<li class="left"></li>
				</ul>
			</div>

		</div>
	</div>
</section>
<?php include "../includes/footer.php";?>

</body>
</html>
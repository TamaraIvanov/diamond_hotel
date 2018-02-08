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

<section id="about_us">


	<div class="under_header_img">
		<img src="../img/about_us_under_header.jpg">
	</div>

	<?php include "../includes/book_menu.php";?>


	<div class="main_container w1170 clearfix">

		<div class="hall_description col-8">

			<div class="main_title_service relative">
				<h2>Few words about us</h2>
				<img class="absolute" src="../img/logo_small.png">
			</div>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida semper augue, vitae suscipit velit rutrum eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sodales enim sit amet egestas condimentum. Nullam in nibh vel dolor tempor commodo eu sed lacus. Integer dignissim massa at ipsum facilisis, porta aliquam urna convallis. Etiam fermentum dignissim mi, eget faucibus felis ultrices ac.</p>
		</div>
	</div>

	<section id="services" class="clearfix">

		<div class="room w100p clearfix relative">
			<div class="service_img col-6 left relative">
				<div>
					<img src="../img/about_us_service1.jpg">
				</div>
			</div>
			<div class="services p0-20 w1170 right absolute right5">

				<div class="col-6 right p10-20">
					<div class="main_title_service relative">
						<h2>Exotic beaches</h2>
						<img class="absolute" src="../img/logo_small.png">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere non mauris eget sollicitudin. Maecenas vitae justo dolor. Aliquam dignissim placerat felis, ut varius massa scelerisque quis. Proin at mi pulvinar, tincidunt felis sit amet, ornare tellus.</p>
					<button class="text_uppercase p10">book now</button>
				</div>
			</div>
		</div>

		<div class="room w100p left relative">
			<div class="service_img col-6 right relative">
				<div>
					<img src="../img/about_us_service2.jpg">
				</div>
			</div>
			<div class="services p0-20 w1170 clearfix absolute left5">
				<div class="col-6 left p10-20">
					<div class="main_title_service relative">
						<h2>Exclusive pools</h2>
						<img class="absolute" src="../img/logo_small.png">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere non mauris eget sollicitudin. Maecenas vitae justo dolor. Aliquam dignissim placerat felis, ut varius massa scelerisque quis. Proin at mi pulvinar, tincidunt felis sit amet, ornare tellus.</p>
					<button class="text_uppercase p10">book now</button>
				</div>
			</div>
		</div>

		<div class="room w100p left relative">
			<div class="service_img col-6 left relative">
				<div>
					<img src="../img/about_us_service3.jpg">
				</div>
			</div>
			<div class="services p0-20 w1170 clearfix absolute right5">
			<div class="col-6 right p10-20">
				<div class="main_title_service relative">
					<h2>Multi day camping</h2>
					<img class="absolute" src="../img/logo_small.png">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere non mauris eget sollicitudin. Maecenas vitae justo dolor. Aliquam dignissim placerat felis, ut varius massa scelerisque quis. Proin at mi pulvinar, tincidunt felis sit amet, ornare tellus.</p>
				<button class="text_uppercase p10">book now</button>
			</div>
		</div>
	</section>

	<div class="additional_services w1170">

		<div class="main_title_service relative">
			<h2>Our awards</h2>
			<img class="absolute" src="../img/logo_small.png">
		</div>

		<div class="additional_services_wrapper clearfix">

			<div class="col-4 left p0-20">
				<img src="../img/award_1.jpg">
			</div>

			<div class="col-4 left p0-20">
				<img src="../img/award_2.jpg">
			</div>

			<div class="col-4 left p0-20">
				<img src="../img/award_3.jpg">
			</div>


		</div>
	</div>



</section>


<?php include "../includes/footer.php";?>

<script>

	$(function() {
		$(document).ready(function() {



			$(".num_guests").click(function(){
				$(this).siblings('div').slideToggle(600);
			});


			$(".num_beds").click(function(){
				$(this).siblings('ul').slideToggle(600);
			});


			numberGuests();
			numberBeds();

			$(".guests").click(function(e) {
				e.stopPropagation();
				return false;

			});


		});



		$('.js-datepicker').datepicker({

			dateFormat: "dd.mm.yy",
			firstDay: 1,
			duration: 600,
			showAnim: 'slideDown'



		}).focus(function() {

			var prevArrow = '<svg fill="" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">'+
				'<path class="svg_arrow" d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" fill=""/>'+
				'<path d="M0-.5h24v24H0z"/>'+
				'</svg>';

			var nextArrow = '<svg fill="#000000" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">'+
				'<path class="svg_arrow" d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" fill=""/>'+
				'<path d="M0-.25h24v24H0z"/>'+
				'</svg>';

			$(".ui-datepicker-prev").html(prevArrow);
			$(".ui-datepicker-next").html(nextArrow);

		});


		function numberGuests() {


			$(".svg_arrow").click(function(){
				var $this = $(this);
				var input = $this.closest('div').siblings('.visitors');
				var numGuests = parseInt(input.val());
				var type = $this.data('type');


				if(type == 'decrease') {
					if (numGuests > 0) {
						numGuests--;
					}
				} else {
					numGuests++;
				}

				input.val(numGuests);



			});

		}
		function numberBeds() {

			$(".num_bed").find('li').click(function(){
				var $this = $(this);

				$this.siblings().removeClass('on_click');

				$this.addClass('on_click');



				var value = $this.data('value');
				var inputVal = $this.closest('div').siblings();

				inputVal.text(value);

				console.log(inputVal);

			});

		}
	});



</script>


</body>
</html>
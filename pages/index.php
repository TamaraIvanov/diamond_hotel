<html xmlns="http://www.w3.org/1999/html">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="shortcut icon" href="../img/logo_small.png"/>
	<title>Diamond Hotel Home</title>


</head>
<body>


<?php include "../includes/header.php";?>

<div id="container">
	<section class="slider_under_header">
		<div class="header_slider relative">
			<div class="auto_slider clearfix">
				<div class="left">
					<img src="../img/auto_slide1.jpg">
				</div>
				<div class="left">
					<img src="../img/auto_slide2.jpg">
				</div>
				<div class="left">
					<img src="../img/auto_slide3.jpg">
				</div>
			</div>
			<div class="header_description text-center w1170">
				<div class="header_description_content absolute">
					<h1 class="p20-0">welcome to diamond hotel</h1>
					<p class="text_uppercase p20-0">feel the taste of luxury</p>
					<div class="book p20-0"><a href="#" class="text_uppercase bold p10-20">book now</a></div>
				</div>
			</div>
		</div>


	</section>
	<?php include "../includes/book_menu.php";?>
	<?php include "../includes/info.php";?>
	<?php include "../includes/services.php";?>
	<?php include "../includes/testimonial.php";?>
	<?php include "../includes/additional.php";?>
	<?php include "../includes/events.php";?>

</div>
<?php include "../includes/footer.php";?>

<script>

	$(function() {

		$('.js-datepicker').datepicker({

			dateFormat: "dd.mm.yy",
			firstDay: 1,
			duration: 400,
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


	});

</script>


</body>
</html>
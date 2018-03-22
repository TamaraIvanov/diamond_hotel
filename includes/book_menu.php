<div id="booking">
	<div class="book_wrapper">
		<form id="book_form" class="booking_menu_wrapper w1170 p20 clearfix" method="post">

			<div class="booking_option left relative book-field">
				<input id="start_date" type="text" class="js-datepicker js_drop_down_btn" name="start_date" placeholder="Check in"
					   data-rule-required="true" data-msg-required="This field is required"/>
			</div>

			<div class="booking_option left relative book-field">
				<input id="end_date" type="text" class="js-datepicker js_drop_down_btn" name="end_date" placeholder="Check out"
					   data-rule-required="true" data-msg-required="This field is required"
					   data-rule-greaterThanDate="#start_date" data-msg-greaterThanDate="End date must be greater than start date"/>

			</div>

			<div class="booking_option left relative book-field">
				<span class="num_guests block left js-book-btn">Adult / Children</span>
				<div class="guests js-drop-list js-book p10-5 absolute no-display">

					<div class="adult col-6 left">
						<div class="left">
							<svg class="svg_arrow" data-type="decrease" fill="#000000" height="30" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
								<path d="M0-.5h24v24H0z" fill="none"/>
							</svg>
						</div>
						<input class="visitors left" type="text" value="1" name="adult" />
						<div class="increase left">
							<svg class="svg_arrow" data-type="increase" fill="#000000" height="30" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
								<path d="M0-.25h24v24H0z" fill="none"/>
							</svg>
						</div>
					</div>

					<div class="children col-6 left">
						<div class=" left">
							<svg class="svg_arrow" data-type="decrease" fill="#000000" height="30" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
								<path d="M0-.5h24v24H0z" fill="none"/>
							</svg>
						</div>
						<input class="visitors left" type="text" value="0" name="children">
						<div class="increase left">
							<svg class="svg_arrow" data-type="increase" fill="#000000" height="30" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
								<path d="M0-.25h24v24H0z" fill="none"/>
							</svg>
						</div>
					</div>
				</div>
			</div>

			<div class="booking_option left relative">
				<div class="book-field">
					<input class="zero" name="num_beds" value="" data-rule-required="true" data-msg-required="This field is required"/>
				</div>

				<span class="num_beds js-book-btn left">Room</span>
				<ul class="js-drop-list js-book num_bed absolute no-display">
					<li class="text-center" data-value="1">1 bed</li>
					<li class="text-center" data-value="2">2 beds</li>
					<li class="text-center" data-value="3">3 beds</li>
					<li class="text-center" data-value="4">4 beds</li>
					<li class="text-center" data-value="5">5 beds</li>
				</ul>

			</div>

			<div class="booking_option left relative">
				<button>Check Availabillity</button>
			</div>


		</form>
	</div>
</div>
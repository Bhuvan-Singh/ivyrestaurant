<?php

?>
<?php include("INCLUDES/header.php"); ?>
	<div id="mobile-menu" class="l-hidden m-hidden s-hidden-x12">
		<div id="fade"></div>
		<div id="menu-content">
			<ul class="x10">
	    		<li class="x12" id="close-menu"><button onclick="hideMenu(); return false;">Close</button></li>
	    		<li class="x12"><a href="index.php">Home</a></li>
	    		<li class="x12"><a href="aboutus.php">About</a></li>
	    		<li class="x12"><a href="gallery.php">Gallery</a></li>
	    		<li class="x12"><a href="contactus.php">Contact</a></li>
	    		<li class="x12"><a href="">Order online</a></li>
			</ul>
			<div id="social-media" class="x12">
				<ul>							
					<li class="x4 social-icon"><a href=""><img src="IMAGES/instagram.png" alt="" height="20px"></a></li>
					<li class="x4 social-icon"><a href=""><img src="IMAGES/twitter.png" alt="" height="20px"></a></li>
					<li class="x4 social-icon"><a href=""><img src="IMAGES/facebook.png" alt="" height="20px"></a></li>
				</ul>
			</div> 
		</div>
    	
    </div>
	<div class="conatiner l12 m12 s12 x12" id="main-wrapper">
		
	 	
		<?php include('INCLUDES/head.php');?>
		<div id="tilted-div-container" class="l12 m12 s12 x12">
			<div id="tilted-div" class="l12 m12 s12 x-hidden"></div>
			<div id="circle-div"></div>
			<div id="circular-div-content-container" class="l12 m12 s12 x12">
				<div id="welcome-image"></div>
				<div id="welcome-head">Welcome</div>
				<div id="welcome-subhead">To Ivy Reataurant</div>
				<div id="welcome-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis diam erat, non consequat metus laoreet at. Fusce lacinia, ipsum a pulvinar mattis, ante velit lobortis eros, ac tristique nulla nulla ut turpis. </div>
				<div id="know-more-button"><a href="#">More</a></div>
			</div>
		
		</div>
		<div id="about-ivy" class="l12 m12 s12 x12">
			<div id="discover-ivy" class="l6 m6 s6 x12">
				
				<div id="discover-ivy-content-container" class="l12 m12 s12 x12">
					<div id="discover-ivy-tilted-div" class="l12 m12 s12 x12"></div>
					<div id="discover-ivy-head" class="l12 m12 s12 x12">Discover</div>
					<div id="discover-ivy-subhead" class="l12 m12 s12 x12"> Our Restaurant</div>
					<div id="discover-ivy-content" class="l12 m12 s12 x12">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis diam erat, non consequat metus laoreet at. Fusce lacinia, ipsum a pulvinar mattis, ante velit lobortis eros, ac tristique nulla nulla ut turpis. Mauris ullamcorper eros nisl, non sodales est blandit convallis. In porttitor malesuada eleifend. Nulla volutpat semper mi. 
						</p>
					</div>
					<div id="discover-ivy-extra" class="l12 m12 s12 x12">
						<h5>consectetur adipiscing elit ante velit lobortis eros</h5>
					</div>
					<div id="check-events-button" class="l12 m12 s12 x12">
						<a href="#">Check Events</a>
					</div>

				</div>
			</div>
			<div id="discover-ivy-image" class="l6 m6 s6 x12"></div>
		</div>

		<!-- Ivys menu section begins here  -->
		<!-- Ivys menu section begins here  -->

		<div id="discover-menu" class="l12 m12 s12 x12">
			<div id="dicover-menu-header" class="l12 m12 s12 x12">
				<div id="discover-menu-heading" class="l12 m12 s12 x12">Discover</div>
				<div id="discover-menu-sub-heading" class="l12 m12 s12 x12">
					OUR MENU
				</div>
				<div id="discover-menu-icon" class="l12 m12 s12 x12"></div>
				<div id="menu-categories" class="l12 m12 s12 x12">
					<ul >
						<li id="menuCat1" onclick="menuFunctionOne();" class="menu-selected" >Breakfast</li>
						<li id="menuCat2" onclick="menuFunctionTwo();">Drinks</li>
						<li id="menuCat3" onclick="menuFunctionThree();">Lunch</li>
						<li id="menuCat4" onclick="menuFunctionFour();">Dinner</li>
					</ul>
				</div>	
			</div>

			<!-- Menu list begins here -->
			<!-- Menu list begins here -->
			<div id="discover-menu-content-cotainer" class="l12 m12 s12 x12">

				<div id="discover-menu-content-cotainer-fade" class="l12 m12 s12 x12"></div>
					<!-- including menu list files	 -->
					<!-- including menu list files	 -->
					<?php include('INCLUDES/menu1.php'); ?>
					<?php include('INCLUDES/menu2.php'); ?>
					<?php include('INCLUDES/menu3.php'); ?>
					<?php include('INCLUDES/menu4.php'); ?>
					
				
			</div>

			<!-- Menu list ends here -->
	
		</div>
		<!-- Ivys menu section ends here  -->
		<!-- Ivys menu section ends here  -->


		<!-- Ivys featured section begins here -->
		<!-- Ivys featured section begins here -->
		<div id="featured-section" class="l12 m12 s12 x12">
			<div id="featured-section-tilted-one"></div>
			<div id="featured-section-tilted-two"></div>
			<div id="featured-section-content-container" class="l12 m12 s12 x12">
				<div id="featured-section-image" class="l12 m12 s12 x12"></div>
				<div id="featured-section-heading" class="l12 m12 s12 x12"><h4>Aenean nec ultrices turpis</h4></div>
				<div id="featured-section-content" class="l9 m9 s9 x12">
					<div class="featured-section-content-tile l4 m4 s4 x12">
						<div class="featured-section-content-tile-count">
							<h6>01</h6>
						</div>
						<div class="featured-section-content-tile-heading">
							<h6>Lorem Ipsum</h6>
						</div>
						
						<div class="featured-section-content-tile-data">
							<p>Aenean nec ultrices turpis. Quisque varius libero turpis, id blandit sapien fermentum at. Donec vel justo eget turpis commodo eleifend. </p>
						</div>
					</div>
					<div class="featured-section-content-tile l4 m4 s4 x12">
						<div class="featured-section-content-tile-count">
							<h6>02</h6>
						</div>
						<div class="featured-section-content-tile-heading">
							<h6>Vulputate fermentum</h6>
						</div>
						
						<div class="featured-section-content-tile-data">
							<p>Aenean nec ultrices turpis. Quisque varius libero turpis, id blandit sapien fermentum at. Donec vel justo eget turpis commodo eleifend. </p>
						</div>
					</div>
					<div class="featured-section-content-tile l4 m4 s4 x12">
						<div class="featured-section-content-tile-count">
							<h6>03</h6>
						</div>
						<div class="featured-section-content-tile-heading">
							<h6>Donec vel</h6>
						</div>
						
						<div class="featured-section-content-tile-data">
							<p>Aenean nec ultrices turpis. Quisque varius libero turpis, id blandit sapien fermentum at. Donec vel justo eget turpis commodo eleifend. </p>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Ivys featured section ends here -->
		<!-- Ivys featured section ends here -->


		<!-- Ivys booking section begins here -->
		<!-- Ivys booking section begins here -->
		<div id="book-table-container" class="l12 m12 s12 x12">
			<div id="book-table-inner" class="l10 m10 s10 x12">
				<div id="time-section-container" class="l4 m4 s4 x12">
					<div id="time-section" class="l10 m10 s10 x12">
						<div id="time-section-heading">
							<h5>Time</h5>
						</div>
						<div id="time-section-image"></div>
						<div class="days"><h6>MONDAY - FRIDAY</h6></div>
						<div class="time-container">
							<div class="time"><h6>xx am - yy pm (loremz)</h6></div>
							<div class="time"><h6>xx am - yy pm (xyz)</h6></div>
						</div>
						<div class="days"><h6>SATURDAY/SUNDAY</h6></div>
						<div class="time-container">
							<div class="time"><h6>xx am - yy pm (xyz)</h6></div>
							<div class="time"><h6> xx am - yy pm (lorem Ipsum)</h6></div>
						</div>
						<div id="mobile-container" class="l10 m10 s10 x12">
							<div class="mobile"><h6>+91 9898959596</h6></div>
							<div class="mobile"><h6>+91 9898959596</h6></div>
						</div>
					</div>
				</div>
				<div id="form-section-container" class="l8 m8 s8 x12">
					<div id="booking-form-container" class="l12 m12 s12 x12">
						<div id="booking-form-container-heading">
							<h6>Book a table now</h6>
						</div>
						<div id="booking-form-container-subheading">
							<h6>Mauris in vulputate orci</h6>
						</div>
						<div id="booking-form" class="l12 m12 s12 x12">
							<form onsubmit="bookTableFunction(); return false;" id="bookTableform">
								<input type="text" name="user_Name" placeholder="Your Name" class="l3 m3 s3 x10" id="user_Name">

								<input type="email" name="user_Email" placeholder="Your Email" class="l3 m3 s3 x10" id="user_Email">

								<input type="text" name="user_Number" placeholder="Your Number" class="l3 m3 s3 x10" id="user_Number">

								<select name="booking_Date" id="booking_Date" class="l3 m3 s3 x10" placeholder="YYYY-MM-DD">
								 	<option value="" disabled selected>YY-MM-DD</option>
									<option value="<?php echo date("y-m-d"); ?>"><?php echo date("y-m-d"); ?></option>
									<option value="<?php echo date("y-m-d", strtotime("+1 day")); ?>"><?php echo date("y-m-d", strtotime("+1 day")); ?></option>
									<option value="<?php echo date("y-m-d", strtotime("+2 day")); ?>"><?php echo date("y-m-d", strtotime("+2 day")); ?></option>
									<option value="<?php echo date("y-m-d", strtotime("+3 day")); ?>"><?php echo date("y-m-d", strtotime("+3 day")); ?></option>
								</select>
								<select name="booking_Time" id="booking_Time" class="l3 m3 s3 x10">
									<option value="" disabled selected>Time</option>
									<option value="7.30 pm">7.30 pm</option>
									<option value="8.30 pm">8.30 pm</option>
									<option value="9.30 pm">9.30 pm</option>
									<option value="10.30 pm">10.30 pm</option>
								</select>
								<select name="person_Number" id="person_Number" class="l3 m3 s3 x10">
									<option value="" disabled selected>Book For</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="More Than 6">More Than 6</option>
								</select>
								<button type="submit" id="bookNowButton" class="l3 m3 s3 x10">Book Now</button>
								<div id="sending-icon-booking" class="l1 m1 s1 x10">
						
								</div>
								<div id="bookingStatus" class="l10 m10 s10 x10">
									Thankyou. Your message was sent successfuly.
								</div>
								
							</form>
						</div>

						
					</div>
					<div id="booking-terms-container" class="l12 m12 s12 x12">
						<div id="booking-terms-inner" class="l11 m11 s11 x11">
							<h6>1. Praesent ullamcorper est id sapien sollicitudin, id malesuada quam tincidunt. Mauris in vulputate orci, ac dignissim eros. Fusce id sem pharetra, sollicitudin neque id, elementum purus.</h6>
							<h6>2. Fusce id sem pharetra, sollicitudin neque id, elementum purus.</h6>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- Ivys booking section ends here -->
		<!-- Ivys booking section ends here -->


		<!-- Extra section begins here -->
		<!-- Extra section begins here -->
		<div id="extra-section" class="l12 m12 s12 x12">
			<div id="extra-section-image" class="l12 m12 s12 x12"></div>
			<div id="extra-section-fade" class="l12 m12 s12 x12"></div>
			<div id="extra-section-content" class="l12 m12 s12 x12">
				<div id="extra-section-content-heading" class="l12 m12 s12 x12">
					<h6>Praesent ullamcorper est id sapien sollicitudin, id malesuada quam tincidunt.Fusce id sem pharetra.</h6>
				</div>
				<div id="extra-section-content-button" class="l12 m12 s12 x12">
					<a href="#">Order Now</a>
				</div>
			</div>

		</div>

		<!-- Extra section ends here -->
		<!-- Extra section ends here -->


		<!-- Footer section begins here -->
		<!-- Footer section begins here -->

		
<?php include("INCLUDES/footer.php"); ?> 



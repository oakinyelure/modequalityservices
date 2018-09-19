<!doctype html>
<!--[if IE 8]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,200300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="/public/css/global/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/flexslider.css">
    <link rel="stylesheet" href="/public/css/global/swiper.min.css">
    <link rel="stylesheet" type="/text/css" href="/public/css/global/jquery.bxslider.css" media="screen">
    <link rel="stylesheet" href="/public/css/global/owl.carousel.css">
    <link rel="stylesheet" href="/public/css/global/main.css">
    <script src="/public/js/global/modernizr.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/public/js/global/html5shiv.min.js"></script>
    <script src="/public/js/global/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqEl3wGbheM0zP1TnNM6OTTnyCe_8JM3Q" type="text/javascript"></script>
</head>
<body class="home">

<!-- Start of header -->

@include('layouts.topnav')


<!-- End of header -->
	<!-- header -->
<section class="home-slide-section">
	<div class="slide" id="slide_header_home">
		<!-- Swiper -->
		<div class="swiper-container slide_header_home">
			<div class="swiper-wrapper">
				<div class="swiper-slide bg-overlay">
					<img src="/public/images/uploads/free/29609199652_66f27fa0f1_o.jpg" alt="">
					<div class="box-desc">
						<div class="container">
							<h2>Bringing our best to make you the best at home</h2>
							<p>We thrive in excellence</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-overlay">
					<img src="/public/images/uploads/free/29609195382_e4c29c4faf_o.jpg" alt="">
					<div class="box-desc">
						<div class="container">
							<h2>Age is just a number</h2>
							<p>Keep an active life</p>
						</div>
					</div>
				</div>

			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagi-slide"></div>
		</div>
	</div>
	<!-- End Slide -->
</section>

<!-- Services Section -->
<section class="services-section">
	<div class="container">
		<div class="row">
			<!-- item -->
			<div class="col-sm-4 col-xs-12">
				<div class="item">
					<a href="#">
						<!-- <figure>
							<img src="images/trans-sv.jpg" alt="">
						</figure> -->
						<i class="fa fa-ambulance flip-horizontal"></i>
					</a>
					<!-- </h1> -->
					<h3 class="dash-title">Transportation Services</h3>
					<p>Enjoy increased mobility and independence with our accessible and affordable transportation. Rides may be requested for any purpose.</p>
				</div>
			</div>
			<!-- end item -->
			<!-- item -->
			<div class="col-sm-4 col-xs-12">
				<div class="item">
					<!-- <h1>
						<figure>
							<img src="images/home-sv.jpg" alt="">
						</figure>
					</h1> -->
					<a href="#"><i class="fa fa-home"></i></a>
					<h3 class="dash-title">In Home Care</h3>
					<p>Mode Quality Service provides personal care and help around the house to help older adults remain independent and living in their homes.</p>
				</div>
			</div>
			<!-- end item -->

			<!-- item -->
			<div class="col-sm-4 col-xs-12">
				<div class="item">
					<!-- <h1>
						<figure>
							<img src="images/card-sv.jpg" alt="">
						</figure>
					</h1> -->
					<a href="#"><i class="fa fa-plus-circle"></i></a>
					<h3 class="dash-title">Care Management</h3>
					<p>A Care Manager provides a single point of contact who can refer you to and manage all the services you need for you or your loved one.</p>
				</div>
			</div>
			<!-- end item -->
			<!-- item -->
			<!-- end item -->
		</div>
	</div>
</section>


<!-- Features section -->
<section class="features-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<h2>Who we are</h2>
				<div class="article-text">
					<img class="pos-img" src="/public/images/uploads/free/ball-2585603_1920.jpg" alt="">
					<h3>Our mission is to </h3>
					<p>promote the health and well-being of patient, client and families by providing high quality, cost effective home care and home nursing services for residents in their homes within our services communities</p>
					<p>To remain a consumer-oriented business aimed at helping individuals, group and communities</p>
				</div>
			</div>

			<!-- Why choose US -->
			<div class="col-sm-4 col-xs-12">
				<h2>Why choose us</h2>
				<div class="article-according">
					<p>
						Providing the best in home care assistance experience for our clients starts with developing an in depth understanding of the client’s needs. We also focus on retaining the highest
						level of independence that patients chose to keep, where our specialized care team will be there to respond deligently and with sense of urgency
					</p>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

						<div class="panel">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title">
							    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							      Non Medical Services
							    </a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
							    <ul>
							    	<li>Personal Care Assistance</li>
							    	<li>Light Housekeeping</li>
							    	<li>Care Coordination</li>
									<li>Meal Preparation</li>
									<li>Laundry</li>
									<li>Companionship</li>
									<li>Shopping</li>
							    </ul>
							  </div>
							</div>
						</div>

						<div class="panel active">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title">
							    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							      Medical Services
							    </a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
							    <ul>
							    	<li>Skilled Nursing</li>
							    	<li>Infusion Therapy</li>
							    	<li>Wound Care</li>
									<li>Home Health Aide</li>
									<li>Activities of Daily Living</li>
									<li>Fall Prevention</li>
							    </ul>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ENd of WHY choose us -->

			<!-- Employment form link -->
			<div class="col-sm-4 col-xs-12">
				<h2>Our Caregivers</h2>
				<div class="article-gallery">
					<p>We are devoted to providing the most professional, reliable and friendly caregivers in the industry.</p>
					<h2>want to be a caregiver?</h2>
					<a href="#" class="hs-btn hs-btn-border"><i class="fa fa-plus"></i> Apply Now</a>
				</div>
			</div>
			<!-- End of employment form link -->

		</div>
	</div>
</section>


<!-- Newsletter section -->
<section class="newsletter-section bg-overlay white-section text-center" style="background-image: url(/public/images/uploads/free/news/n-home.jpg);">
	<div class="container">
		<h2>newsletter</h2>
		<p>All the events and classes offered at Happy Seniors are described in a monthly newsletter. Be the first to sign up.</p>
		<form action="#" method="post">
			<input type="email" size="42" placeholder="Your Email Address" >
			<button type="submit" class="hs-btn hs-btn-primary">
				<i class="fa fa-plus"></i>
				subscribe
			</button>
		</form>
	</div>
</section>


<!-- Testimonials section -->
<section class="testimonials-section">
	<div class="container">
		<div class="swiper-testimonial swiper-container">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide">
	            	<div class="post">
	            		<div class="row">
	            			<div class="col-sm-5 col-md-4">
	            				<div class="atc-image">
									<img src="/public/images/uploads/free/hands-981400_1920.jpg" alt="service-1" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-7 col-md-8">
								<div class="post-detail">

									<h3>Vision</h3>
									<div class="entry">
										<p><em><strong>Mode Quality Services</strong>, aspires to become the home care company that achieves the highest standard in the industry and that is a vital part of the continuum of care in the communities we serve</em></p>
									</div>
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <div class="swiper-slide">
					<div class="post">
	            		<div class="row">
	            			<div class="col-sm-5 col-md-4">
	            				<div class="atc-image">
									<img src="/public/images/uploads/free/29609199652_66f27fa0f1_o.jpg" alt="service-1" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-7 col-md-8">
								<div class="post-detail">
									<h3>Value Statements</h3>
									<div class="entry">
										<p><em><strong>We</strong> are committed to providing extraordinary care to all clients with every contact, and to creating a relationship whereby each patient identifies <strong>Mode Quality Services, Inc</strong> as his/her home care agency for every period</em></p>
										<p><em><strong>We</strong> are committed to <strong>Visionary Growth and Innovation</strong> such that we will seek best practice for client outcomes, growing as appriopriate by using new technology and creative methods to ensure long-term financial strength of our organization</em></p>
									</div>
								</div>
							</div>
						</div>
					</div>
	            </div>
	        </div>
	        <div class="col-sm-offset-5 col-md-offset-4">
	        	<div class="swiper-pagination swiper-pagi-testinmonial"></div>
	        </div>
	    </div>
	</div>

</section>


<!-- Maps section -->
<section class="maps-section">
    <div id="maps"></div>
</section>
	
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				
				<div class="row">
					<!-- ACTIVEITIES -->
					<div class="col-sm-3">
						<div class="wg-footer wg-custom-nav">
							<h3>
								ACTIVITIES & EDUCATION
							</h3>
							<ul>
								<li><a href="#">In Home Care</a>
								<li><a href="#">Care Management</a>
								<li><a href="#">Light Housekeeping</a>
								<li><a href="#">Care Coordination</a>
								<li><a href="#">Meal Preparation</a>
								<li><a href="#">Laundry Services</a>
								<li><a href="#">Companionship</a>
								<li><a href="#">Shopping</a>
								<li><a href="#">Nursing</a>
								<li><a href="#">Infusion Therapy</a>
								<li><a href="#">Wound Care</a>
								<li><a href="#">Home Health Aide</a>
								<li><a href="#">Activities of daily living</a>
								<li><a href="#">Fall Prevention</a>

							</ul>
						</div>
					</div>
					<!-- single day tour -->
					<div class="col-sm-3">
						<div class="wg-footer wg-custom-nav">
							<h3>
								Service Area
							</h3>
							<ul>
								<li>Kane County</li>
								<li>Cook County</li>
								<li>Dupage County</li>

							</ul>
						</div>
					</div>
					<!-- Contact us -->
					<div class="col-sm-3">
						<div class="wg-footer">
							<h3>
								Contact Us
							</h3>
							<ul class="list-unstyled list-style-image">
								<li><img src="/public/images/phone.png" alt=""> <strong>Phone</strong>: (224) 509-4113</li>
								<li><img src="/public/images/print.png" alt=""> <strong>Fax</strong>: (855) 422-9855</li>
								<li><img src="/public/images/mail.png" alt=""> <strong>Email</strong>: modequalityservices@gmail.com</li>
								<li><img src="/public/images/map.png" alt="">957 North Plum Grove Road, Suite A, Schaumburg, IL 60173</li>
							</ul>
						</div>
					</div>
					<!-- Follow us -->
					<div class="col-sm-3">
						<div class="wg-footer wg-socials">
							<h3>
								Follow Us
							</h3>
							<ul class="list-unstyled list-style-image">
								<li><a href="#"><img src="/public/images/facebook.png" alt=""> Follow us on Facebook</a></li>
								<li><a href="#"><img src="/public/images/twitter.png" alt=""> Tweet us on Twitter</a></li>
								<li><a href="#"><img src="/public/images/instagram.png" alt=""> Find us on Instagram</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom text-center">
			<h5>© Copyright {{date("Y")}},  Mode Quality Services</h5>
			<h5>Software and Innovation by <a href="//github.com/oakinyelure">Micaware INC.</a> (317) 652 8607</h5>
		</div>

	</footer>
	<!-- footer -->
		</div>
		<!-- wrapper -->
		<script src="/public/js/global/jquery.min.js"></script>
	    <script src="/public/js/global/bootstrap.min.js"></script>
	    <script src="/public/js/global/jquery.bxslider.min.js"></script>
	    <script src="/public/js/global/plugins.min.js"></script>
	    <script src="/public/js/global/swiper.min.js"></script>
	    <script src="/public/js/global/owl.carousel.min.js"></script>
	    <script src="/public/js/global/jquery.mixitup.min.js"></script>
	    <script src="/public/js/global/jquery.incremental-counter.min.js"></script>
	    <script src="/public/js/global/simple-weather.min.js"></script>
	    <script src="/public/js/global/main.js"></script>
	    
	    <!-- script -->
	</body>
</html>
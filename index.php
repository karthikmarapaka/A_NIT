<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['email_s']))
        {   $email_i=$_SESSION['email_s'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['s_no_s']))
        {   $s_no_i=$_SESSION['s_no_s'];
        } 
        else
        {
            header('location: login.php');
        }

if(isset($_SESSION['first_name_s']))
        {
            $first_name_i=$_SESSION['first_name_s'];
            
        }
        else
        {$first_name_n="Guest";
  
            header('location: login.php');
        }
        if(isset($_SESSION['reg_no_s']))
        {
            $reg_no_a=$_SESSION['reg_no_s'];
            $sqla= "SELECT * FROM my_account WHERE email='$email_m'";
            if($result=mysqli_query($a,$sqla))
            {
                $row=mysqli_fetch_row($result);
            }
        }
        else
        {
            header('location: login.php');
        }
?>

 <html lang="zxx">

    
<!-- Mirrored from personala.bitballoon.com/light.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 09:57:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="HTML5 Template Personala onepage themeforest" />
		<meta name="description" content="Personala - Onepage Multi-Purpose HTML5 Template" />
		<meta name="author" content="His7am" />

		<!-- Title  -->
		<title>NIT Warangal | A_NIT</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo3.png" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="css/plugins.css" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="css/style.css" />

    </head>

    <body>

    	<!-- =====================================
    	==== Start Loading -->
    	<div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
    	<!-- End Loading ====
    	======================================= -->

       
    	<!-- =====================================
    	==== Start Navbar -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">

			  <!-- Logo -->
			  <a class="logo" href="index.php">NIT Warangal</a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <!-- navbar links -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item drop-down">
			        <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
			      <ul class="dropdown-menu" style="right: 22vw; left: auto;">
                                    <li class="nav-item"><a href="promises.php" class="nav-link" style="color:black;">Promises</a></li>
                                    <li class="nav-item"><a href="student_council.php" class="nav-link" style="color:black;">Student Council</a></li>
                                    <li class="nav-item"><a href="projects.php" class="nav-link" style="color:black;">Projects</a></li>
                                    <li class="nav-item"><a href="warq.php" class="nav-link" style="color:black;">Warq</a></li>
                                    <li class="nav-item"><a href="complaint_box.php" class="nav-link" style="color:black;">Complaint Box</a></li>
                                    <li class="nav-item"><a href="assess.php" class="nav-link" style="color:black;">Assess</a></li>
                                    <li class="nav-item"><a href="creative_ideas.php" class="nav-link" style="color:black;">Creative ideas</a></li>
                                    <li class="nav-item"><a href="dirmess.php" class="nav-link" style="color:black;">Dir's Message</a></li>
                                    <li class="nav-item"><a href="faq.php" class="nav-link" style="color:black;">FAQ</a></li>
                              </ul>
                              </li>
			      <li class="nav-item drop-down">
			        <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $first_name_i; ?></a>
                                <ul class="dropdown-menu" style="right:17vw; left:auto;">
                                    <li class="nav-item"><a  href="my_projects.php" class="nav-link" style="color:black;">My projects</a></li>
                                    <li class="nav-item"><a class="nav-link" href="my_warq.php" style="color:black;">My warQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="my_complaint_box.php" style="color:black;">My complaint box</a></li>
                                    <li class="nav-item"><a class="nav-link" href="my_creative_ideas.php" style="color:black;">MY creative ideas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="my_account.php" style="color:black;">Your Info</a></li>
                                 </ul>
			      </li>
			      
			      
			      <li class="nav-item">
			        <a class="nav-link" href="change_password.php">Change Password</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="logout.php">
                                    <span class="glyphicon glyphicon-log-out" style="color:white;">
                                    </span>Logout</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>
    	<!-- End Navbar ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Header -->
    	<header class="header valign bg-img" data-overlay-dark="5" data-background="img/nit_main.jpg" data-stellar-background-ratio="0.5">
    		<div class="container">
    			<div class="row">
    				<div class="vertical-center full-width text-center caption">
    					
	    				<h1 class="cd-headline clip">
				            <span class="blc">Welcome to</span>
				            <span class="cd-words-wrapper">
				              <b class="is-visible">NIT WARANGAL</b>
				              <b>A_NIT</b>
				              
				            </span>
		          		</h1>
    				</div>
    			</div>
    		</div>

    		<div class="arrow">
				<a href="#" data-scroll-nav="1">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
    	</header>
    	<!-- End Header ====
    	======================================= -->

    	<!-- =====================================
    	==== Start Services -->
    	<section class="services section-padding">
    		<div class="container">
    			<div class="row">
    				
    				<div class="section-head full-width">
    					<h4 class="title">Our Departments</h4>
    				</div>

    				<div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-md50">
    						<span class="icon icon-laptop"></span>
    						<h6>Computer Sciences</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-md50">
    						<span class="icon icon-layers"></span>
    						<h6>Electronics and Communications</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-md50">
    						<span class="icon icon-megaphone"></span>
    						<h6>Electrical and Electronics</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
                            <div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-md50">
    						<span class="icon icon-megaphone"></span>
    						<h6>Mechanical</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
                            <div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-md50">
    						<span class="icon icon-megaphone"></span>
    						<h6>Civil</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
    				
    				<div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-md50">
    						<span class="icon icon-shield"></span>
    						<h6>Chemical</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 active bolt">
    					<div class="item mb-sm50">
    						<span class="icon icon-mobile"></span>
    						<h6>Bio-Technology</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 active bolt">
    					<div class="item">
    						<span class="icon icon-gears"></span>
    						<h6>Metallurgy</h6>
    						<p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa, ut tincidunt eros est nec diam</p>
    					</div>
    				</div>
                            <div class="bord full-width"></div>

    			</div>
    		</div>
    	</section>
    	<!-- End Services ====
    	======================================= -->

        <!-- =====================================
    	==== Start Portfolio -->
    	<section class="portfolio section-padding">
			<div class="container">
				<div class="row">

    				<!-- Section-Head -->
    				<div class="section-head full-width">
    					<h4 class="title">Admin Staff</h4>
    				</div>

    			</div>

				<div class="row justify-content-center">

					<!-- filter links -->
					<div class="filtering text-center mb-50">
						<span data-filter='*' class="active">All</span>
						<span data-filter='.graphic'>Director</span>
						<span data-filter='.web'>Deans</span>
						<span data-filter='.brand'>Co-ordinators</span>
					</div>

					<!-- gallery -->
					<div class="gallery full-width">

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items graphic">
							<div class="item-img">
								<img src="img/portfolio/Director.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Director</h6>
										<h5>N.V.Ramana Rao</h5>
									</div>
									
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items web">
							<div class="item-img">
								<img src="img/portfolio/2.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Dean</h6>
										<h5>#Dean name</h5>
									</div>
									
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items web">
							<div class="item-img">
								<img src="img/portfolio/3.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Dean</h6>
										<h5>#Dean name</h5>
									</div>
									
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items web">
							<div class="item-img">
								<img src="img/portfolio/4.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>Dean</h6>
										<h5>#Dean name</h5>
									</div>
									
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items brand">
							<div class="item-img">
								<img src="img/portfolio/5.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>TZ Co-ordinator</h6>
										<h5>#name</h5>
									</div>
									
								</div>
							</div>
						</div>

						<!-- gallery item -->
						<div class="col-md-6 col-lg-4 items brand">
							<div class="item-img">
								<img src="img/portfolio/6.jpg" alt="image">
								<div class="item-img-overlay text-center valign">
									<div class="overlay-info vertical-center full-width">
										<h6>SS Co-ordinator</h6>
										<h5>#name</h5>
									</div>
									
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
					</div>

					

				</div>
			</div>
		</section>
    	<!-- End Portfolio ====
    	======================================= -->


    	<!-- =====================================
    	==== Routine Orders -->
    	<section class="testimonials section-padding bg-img" data-overlay-dark="8" data-background="img/b2.jpg">
    		<div class="container">
    			<div class="row">

    				<!-- Section-Head -->
    				<div class="section-head full-width mb-50">
    					<span class="icon icon-quote"></span><br>
    					<h4 class="title">Routine Orders</h4>
    				</div>

    				<div class="offset-md-1 col-md-10">
    					<div class="owl-carousel owl-theme text-center">
	    					<div class="citem">
	    						<p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy, when an unknown printer took a galley of type a type specimen book.</p>
	    						<h5>Alex Smith</h5><h6>Envato Author</h6>
	    					</div>
	    					<div class="citem">
	    						<p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy, when an unknown printer took a galley of type a type specimen book.</p>
	    						<h5>Alex Smith</h5><h6>Envato Author</h6>
	    					</div>
	    					<div class="citem">
	    						<p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy, when an unknown printer took a galley of type a type specimen book.</p>
	    						<h5>Alex Smith</h5><h6>Envato Author</h6>
	    					</div>
                                            <div class="citem">
	    						<p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy, when an unknown printer took a galley of type a type specimen book.</p>
	    						<h5>Alex Smith</h5><h6>Envato Author</h6>
	    					</div>
	    				</div>
    				</div>

    			</div>
    		</div>
    	</section>
    	<!-- End Testimonails ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Blog -->
    	<section class="blog section-padding">
    		<div class="container">
    			<div class="row">
    				
    				<div class="section-head full-width">
    					<h4 class="title">Institute Activities</h4>
    				</div>

    				<div class="owl-carousel owl-theme">
    					<div class="pitem">
    						<div class="post-img">
    							<a href="#0">
    								<img src="img/blog/1.jpg" alt="">
    							</a>
    							
    						</div>
    						<div class="content">
    							<h3>
    								The Best WordPress Real Estate Themes & Plugins
    							</h3>
    							<p>Real estate is an uber-competitive marketplace full of businesses competing for the same set of consumers. They're all looking for …</p>
    							<div class="info">
    								<span class="more">
    									<a href="#0">Read More</a>
    								</span>
    								<span class="by">
    									By : Conducting Club
    								</span>
    							</div>
    						</div>
    					</div>
    					<div class="pitem">
    						<div class="post-img">
    							<a href="#0">
    								<img src="img/blog/2.jpg" alt="">
    							</a>
    							
    						</div>
    						<div class="content">
    							<h3>
    								4 Deadly Sins of UI and UX Design You Need to Avoid
    							</h3>
    							<p>It’s not wrong to say that perfection in web design is something that doesn't really exist. But that doesn't mean …</p>
    							<div class="info">
    								<span class="more">
    									<a href="#0">Read More</a>
    								</span>
    								<span class="by">
    									By : Conducting Club
    								</span>
    							</div>
    						</div>
    					</div>
    					<div class="pitem">
    						<div class="post-img">
    							<a href="#0">
    								<img src="img/blog/3.jpg" alt="">
    							</a>
    							
    						</div>
    						<div class="content">
    							<h3>
    								The Best Advice for Novice Web Designers in 2018
    							</h3>
    							<p>When you're just getting started, it's hard to know what advice to listen to, and what to ignore. Finding your …</p>
    							<div class="info">
    								<span class="more">
    									<a href="#0">Read More</a>
    								</span>
    								<span class="by">
    									By : Conducting Club
    								</span>
    							</div>
    						</div>
    					</div>
    					<div class="pitem">
    						<div class="post-img">
								<img src="img/blog/4.jpg" alt="">
    							
    						</div>
    						<div class="content">
    							<h3>
    								20 Stellar Science Fiction After Effects Templates
    							</h3>
    							<p>We’ve assembled a collection of sci-fi After Effects templates most likely to induce awe and wonder and tried to pick …</p>
    							<div class="info">
    								<span class="more">
    									<a href="#0">Read More</a>
    								</span>
    								<span class="by">
    									By : Conducting Club
    								</span>
    							</div>
    						</div>
    					</div>
                                    <div class="pitem">
    						<div class="post-img">
								<img src="img/blog/4.jpg" alt="">
    							
    						</div>
    						<div class="content">
    							<h3>
    								20 Stellar Science Fiction After Effects Templates
    							</h3>
    							<p>We’ve assembled a collection of sci-fi After Effects templates most likely to induce awe and wonder and tried to pick …</p>
    							<div class="info">
    								<span class="more">
    									<a href="#0">Read More</a>
    								</span>
    								<span class="by">
    									By : Conducting Club
    								</span>
    							</div>
    						</div>
    					</div>
    				</div>

    			</div>
    		</div>
    	</section>
    	<!-- End Blog ====
    	======================================= -->

        <!-- =====================================
    	==== Start Footer -->
    	<footer class="footer">
    		<p>Copyright &copy; And Made to Change. All Rights Reserved.</p>
    	</footer>
    	<!-- End Footer ====
    	======================================= -->




       
        <!-- jQuery -->
		<script src="js/jquery-3.0.0.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.min.js"></script>

		<!-- popper.min -->
		<script src="js/popper.min.js"></script>

	  	<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>

		<!-- scrollIt -->
		<script src="js/scrollIt.min.js"></script>

		<!-- animated.headline -->
		<script src="js/animated.headline.js"></script>

		<!-- jquery.waypoints.min -->
		<script src="js/jquery.waypoints.min.js"></script>

		<!-- jquery.counterup.min -->
		<script src="js/jquery.counterup.min.js"></script>

		<!-- owl carousel -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- jquery.magnific-popup js -->
		<script src="js/jquery.magnific-popup.min.js"></script>

		<!-- stellar js -->
		<script src="js/jquery.stellar.min.js"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="js/isotope.pkgd.min.js"></script>

      	<!-- validator js -->
      	<script src="js/validator.js"></script>

      	<!-- custom scripts -->
        <script src="js/scripts.js"></script>

    </body>

<!-- Mirrored from personala.bitballoon.com/light.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 09:58:07 GMT -->
</html>

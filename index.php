<?php
	include 'includes/header.php';
?>
	<!-- ===================================== START login ====================================== -->
<!--<section class="upper-bar">
		<div class="container">
			<div class="pull-right">
				<div>
					<a href="login.php"> Login</a> /<a href="register.php"> Sign Up</a>
				</div>
			</div>
		</div>
	</section>-->

	<!-- ===================================== END login bar ====================================== -->
	<!-- ===================================== START NAVBAR ====================================== -->
	<nav class="navbar navbar-default navbar-fixed-top" style="top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="img/aiche.png" class="logo-big"/>
					<img src="img/aiche_logo_black.png" class="logo-small"/>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="about_us.php">About us</a></li>
					<li><a href="#committee">Committees</a></li>
					<li><a href="#gallery">Gallery</a></li>
					<li><a href="http://aichesusc.org/aiche-blog-home-page/">Blog</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<!--<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
					</li>-->
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<!-- =====================================  END NAVBAR ======================================= -->

	<!-- ===================================== START SLIDER ====================================== -->
	<section class="slider">
		<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="5000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>-->
				<div><a href="#" class="scroll-down"></a></div>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/new/home_1.jpg" alt="Los Angeles" class="image-slider" width="100%">
					<div class="color-display"></div>
					<!--<div class="carousel-caption">
						<h1 class="main-title">AIChE SUSC</h1>
							
							<a href="http://aichesusc.org/teampage/" class="btn circle btn-theme effect btn-md">Our Team</a>
						<p class="lead"></p>
					</div>-->
				</div>
				<div class="item">
					<img src="img/new/spark.jpg" alt="Chicago" class="image-slider" width="100%">
					<div class="color-display"></div>
					<!--<div class="carousel-caption">
						<h1 class="main-title">American Institute of Chemical Engineers</h1>
						<p class="lead"> Suez University Branch</p>
							<a href="https://www.aiche.org/'" class="btn circle btn-theme effect btn-md">Check out</a>
					
					</div>-->
				</div>
				<div class="item">
					<img src="img/new/home_2.jpg" alt="New York" class="image-slider" width="100%">
					<div class="color-display"></div>
					<!--<div class="carousel-caption">
						<h1 class="main-title"> Chase the Perfection to Catch Excellence </h1>
						<p class="lead"></p>
					
					</div>-->
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	<!-- =====================================  END SLIDER  ====================================== -->
	<!--===================================== announcement =================================-->
	<section class="new_magazine">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h2 class=" h-about"><span style="color:white">Check Out</span> <span>Spark</span></h2>
					<a href="http://aichesusc.org/aiche-blog-home-page/Magazine/" class="btn circle btn-theme effect btn-md">Spark Magazine</a>
				</div>
			</div>
		</div>
	</section>
	<!-- ===================================== START Comitee section =================================== -->
	<section class="about-us " >
		<div class="container"  >
				<div class="text-center">
					<h2 class=" h-about">Who We <span>Are</span></h2>
				</div>
			<div class="row">
				<div class="col-sm-8 wow fadeInLeft" data-wow-offset="200" id="about">
					
					<p>AIChE stands for " American Institute of Chemical Engineers". It is the world's leading organization for chemical engineering professionals. It's a nonprofit organization with more than 60,000 members from over 110 countries worldwide.
</p>
					<p>
                        AIChE, Suez University Student Chapter (AIChE SUSC) was founded in 2013 as a branch from AIChE International, and it includes a group of undergraduate students, dedicated to the advancement of academic learning techniques, and personal development systems, trying to create links between the university and the industry. 
                        </p>
					
				</div>
				<div class="col-sm-4 wow slideInRight about-images" data-wow-offset="200" >
					<img src="img/president.jpg" class="img-responsive center-block about-us-img"/>
					<div class="shape"></div>
					<h3 class="text-center">Ahmed El-Atar</h3>
					<h4 class="text-center">Mr.President</h4>
				</div>
				<div class="col-xs-12">
					<div class="about-us-btn text-center">
						<a href="about_us.php" class="btn circle btn-theme effect btn-md">Read more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===================================== END Comitee section =================================== -->
	<!--====================================== START Services =============================================-->
	<section class="services" >
		<div class="container"  >
				<div class="text-center">
					<h2 class=" h-about">Our <span>Services</span></h2>
				</div>
			<div class="row">
				<div class="services-items">
				    <div class="col-md-4 single-item">
						<div class="item">
							<div class="thumb">
                                <img class="img-scale-services" src="img/new/spark2022.jpg" alt="Thumb">
                            </div>
							<div class="info">
                                <h3>Our Magazine</h3>
								<a href="http://aichesusc.org/aiche-blog-home-page/Magazine/"><span>Go to link<i class="fa fa-arrow-right"></i></span></a>
                            </div>
						</div>
					</div>
				    <div class="col-md-4 single-item">
						<div class="item">
							<div class="thumb">
                                <img class="img-scale-services" src="img/new/Library.jpg" alt="Thumb">
                            </div>
							<div class="info">
                                <h3>Our Library</h3>
								<a href="https://drive.google.com/drive/folders/1xjaS-ok3c37gqg5Jq_IbYbOugASO_qCF"><span>Go to link<i class="fa fa-arrow-right"></i></span></a>
                            </div>
						</div>
					</div>
					<div class="col-md-4 single-item">
						<div class="item">
							<div class="thumb">
                                <img class="img-scale-services" src="img/new/cv.jpg" alt="Thumb">
                            </div>
							<div class="info">
                                <h3>Design Your CV</h3>
								<a href="href=aichesusc.org/cv/"><span>Go to link<i class="fa fa-arrow-right"></i></span></a>
                            </div>
						</div>
					</div>
					
					<div class="col-md-4 single-item">
						<div class="item">
							<div class="thumb">
                                <img class="img-scale-services" src="img/new/blog.jpg" alt="Thumb">
                            </div>
							<div class="info">
                                <h3>Blog</h3>
								<a href="http://aichesusc.org/aiche-blog-home-page/"><span>Go to link<i class="fa fa-arrow-right"></i></span></a>
                            </div>
						</div>
					</div>
				<div>
			</div>
		</div>
	</section>
	<!--======================================  END  Services =============================================-->
	<!-- ===================================== START QUOTES  ========================================= -->
	<section class="quotes">
		<div class="container">
			<div class="row">
				<div class="color-display"></div>
				<div id="Carousel" class="carousel slide" data-ride="carousel" data-interval="1000">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#Carousel" data-slide-to="0" class="active" style="box-shadow: 0px 1px 3px #333;""></li>
						<li data-target="#Carousel" data-slide-to="1" style="box-shadow: 0px 1px 3px #333;""></li>
						<li data-target="#Carousel" data-slide-to="2" style="box-shadow: 0px 1px 3px #333;""></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" style="height:400px">
						<div class="item active slider-text">
							<div class="text"><i class="fa fa-quote-left"></i> If you make peace without defense power,
then you should be really ready to be ruled. <i class="fa fa-quote-right"></i> </div>
						</div>
						<div class="item slider-text">
							<div class="text"><i class="fa fa-quote-left"></i> There is no such thing as weak competition; it grows all the time.<i class="fa fa-quote-right"></i></div>
						</div>
						<div class="item slider-text">
							<div class="text"><i class="fa fa-quote-left"></i> We should be ready for a change. <i class="fa fa-quote-right"></i> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================  END  QUOTES  ========================================= -->
	<!-- =====================================  START  COMMITTEES  ========================================= -->
	<section class="committees">
		<div class="container"  id="committee">
			<div class="row">
				<div class="text-center">
					<h2 class="h1">COMMITTEES</h2>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="committee-item wow bounceIn">
						<i class="fa fa-code"></i>
						<h5>Website</h5>
						<p>
Managing and upgrading our website.<br>
Responsible for creating online recruitment form, trainings form, online surveys, courses
form and any form related to our events.<br>
Working on raising our website reach and knowing how to get benefits from that.
</p>
					</div>
					<div class="committee-item wow fadeInLeft">
						<i class="fa fa-globe"></i>
						<h5>Multimedia</h5>
						<p>
Responsible for any needed graphic designs.<br>
Responsible for making designs of our packages and printings.<br>
Responsible for creating our online events and marketing for our programs.<br>
Responsible for making motion graphic videos and designing our magazine.<br>
Responsible for posting any update and creating non-technical content for all social media platforms and event.<br>
Improving our Facebook, twitter, Instagram and YouTube accounts’ reach and marketing for them.
</p>
					</div>
					<div class="committee-item wow fadeInLeft">
						<i class="fa fa-android back-icon"></i>
						<h5>Mobile Application</h5>
						<p>
Managing and upgrading our android application. <br>
Expanding our application and launching it through App Store .<br>
Responsible for uploading our magazine, ARChE, ATB and AIChE Capsules to our application.<br>
Working on raising our application reach and knowing how to get benefits from that.
</p>
					</div>
					
					
					
					
<!--					<div class="committee-item wow fadeInLeft">-->
<!--						<i class="fa fa-camera-retro back-icon"></i>-->
<!--						<h5>EC</h5>-->
<!--						<p>-->
<!---Planning for and organizing our extracurricular events-->
<!-- <br>-->
<!---Planning for and organizing our charity programs-->
<!--<br>-->
<!---Planning for and organizing our welcome party and opening in cooperation with OC team-->
<!--<br>-->
<!---Making good plans in cooperation with committees Heads to revive the spirit of members</p>-->
<!--					</div>-->



					
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="committee-item wow bounceIn">
						<i class="fa fa-free-code-camp back-icon"></i>
						<h5>DP</h5>
						<p>
Responsible for our offline marketing in Suez University
                                	<br>
Booking and delivering events tickets
<br>
Practicing their publicity duties at our booth (if existed)</p>
					</div>
					<div class="committee-item wow bounceIn">
						<i class="fa fa-handshake-o"></i>
						<h5>PR&FR</h5>
						<p>
Providing field trips and winter and summer trainings.<br>
Providing technical courses by communicating with instructors.<br>
Completing deals with sponsor(s), e.g. catering, media coverage, incash, etc. for our events.<br>
Finding and contacting potential sponsors for our reference and our magazine</p>
					</div>
					<div class="committee-item wow bounceIn ">
						<i class="fa fa-lightbulb-o back-icon"></i>
						<h5>Survey</h5>
						<p>
Conducting online and offline surveys about our courses and events
 <br>
Cooperating with  the  HRM  committee  in  discussing  possible  solutions  for people problems and complains</p>
					</div>
					
					
					<!--<div class="committee-item wow bounceIn">
						<i class="fa fa-search back-icon"></i>
						<h5>Academy</h5>
						<p>
-Finishing our reference, AIChE Reference for Chemical Engineers (ARChE)
<br>
-Providing multimedia team with technical contents for posts
<br>
-Responsible for AIChE-Refining-Zone program
<br>
-Responsible for the research paper competition</p>
					</div>-->
					
					
					<div class="committee-item wow fadeInRight">
						<i class="fa fa-book back-icon"></i>
						<h5>Technical</h5>
						<p>
Providing the required data for our campaigns.<br>
Integrating with other committees by presenting technical sessions.<br>
Implementing AIChE Refining Zone program.<br>
Working on revising our reference and finishing the missed parts.<br>
Responsible for developing ATB and AIChE Capsules.<br>
Providing articles, case studies and interviews for our magazine.
<br>
</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 ">
					
					<div class="committee-item wow fadeInRight">
						<i class="fa fa-male back-icon"></i>
						<h5>HRD</h5>
						<p>
Responsible for the members’ development by presenting non -technical sessions.<br>
Providing workshops to practice the presented sessions and prepare a summarized report for each session.
</p></p>
					</div>
					<div class="committee-item wow fadeInRight">
						<i class="fa fa-globe back-icon"></i>
						<h5>HRM</h5>
						<p>
Responsible for ground and online recruitment, reposition and hunting.
<br>
Responsible for filtration, screening and selecting processes
<br>
Responsible for the reviewing process through KPIs and evaluations
<br></p>
					</div>
					<div class="committee-item wow fadeInRight">
						<i class="fa fa-address-book back-icon"></i>
						<h5>OC</h5>
						<p>
Responsible for the logistics of any event.<br>
Responsible for our package deals.<br>
Organizing our event, courses, trainings, conferences, meetings and parties.<br>
Responsible for any extraordinary activities.
</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================   END  COMMITTEES  ========================================= -->
	<!-- ====================================== START GALLERY ==========================================-->
	<section class="gallery" id="gallery">
		<div class="container-fluid">
			<div class="row">
				<ul class="list-inline gallery-filters">
					<li class="all-list">
						<a>ALL</a>
					</li>
					<li class="opening-list">
						<a>OPENING</a>
					</li>
					<li class="aicheve-list">
						<a>ACHIEVE</a>
					</li>
						<li class="batches-list">
						<a>Careerk</a>
					</li>
				</ul>
				<div class="gallery-images">
				    	<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (17).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				    	<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (2).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (16).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (15).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (14).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
										<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (19).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (18).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (3).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
								<div class="col-sm-3 aicheve">
						<figure>
							<img src="img/1.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">ACHIEVE</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 aicheve">
						<figure>
							<img src="img/2.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">ACHIEVE</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 aicheve">
						<figure>
							<img src="img/3.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">ACHIEVE</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (4).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (5).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (6).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (7).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (8).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (11).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (12).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 opening">
						<figure>
							<img src="img/open2019 (13).jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">OPENING</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 batches">
						<figure>
							<img src="img/careerk-1.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">Careerk-2</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 batches">
						<figure>
							<img src="img/careerk-2.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">Careerk-2</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 batches">
						<figure>
							<img src="img/careerk-3.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">Careerk-2</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 batches">
						<figure>
							<img src="img/careerk-4.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">Careerk-2</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-3 batches">
						<figure>
							<img src="img/careerk-5.jpg" class="img-responsive wow bounceIn" />
							<figcaption>
								<div class="middle">
									<div class="middle-inner">
										<p class="gallery-title">Careerk-2</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
			</div>
		</div>
	</section>
	<!-- ======================================  END GALLERY ==========================================-->
	<!-- =====================================   START FACTS     ==========================================-->
	<section class="facts text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="1000">1000</h2>
					<h4>Chances of training</h4>
					<p>are given for the <span class="highlight">best members</span> do the best for <span class="highlight">AIChE SUSC</span></p>
				</div>
				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="150">150</h2>
					<h4>technical and none technical</h4>
					<p><span class="highlight">envents</span> and <span class="highlight">conferences</span></p>
				</div>
				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="50">50</h2>
					<h4>courses</h4>
					<p>be avaliable for student by a <span class="highlight">qualified groub of professors</span> of professors </p>
				</div>
				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="40">40</h2>
					<h4>Field Trips</h4>
					<p>are organized to <span class="highlight">various companies </span> per year</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="100">100</h2>
					<h4>valuable prizes</h4>
					<p>are awarded to the <span class="highlight">best members</span></p>
				</div>

				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="3">3</h2>
					<h4>global prizes</h4>
					<p>like <span class="highlight">outstanding</span> is awarded for <span class="highlight">AIChE SUSC</span> as the <span class="highlight">BEST AIChE</span>  in the world</p>
				</div>
				<div class="col-md-3 wow bounceIn">
					<h2 class="count" data-stop="170">100</h2>
					<h4>excellent students</h4>
					<p>join <span class="highlight">AIChE SUSC</span> each season</p>
				</div>
				<div class="col-md-3 wow bounceIn">
					<h2 class="Count" data-stop="30758">31500</h2>
					<h4>likes</h4>
					<p>on <span class="highlight">AIChE SUSC</span> page on <span class="highlight">Facebook</span></p>
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================   END FACTS     ==========================================-->
	<!-- ====================================== START FOOTER ======================================== -->
	<footer>
		<div class="footer-widgets" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="footer-widget">
							<h3 class="highlight">ABOUT AIChE</h3>
							<div class="inner">
								<p>AIChE, Suez University Student Chapter (AIChE SUSC) was founded in 2013 as a branch from AIChE International, and it includes a group of undergraduate students, dedicated to the advancement of the academic learning techniques, and personal development systems, trying to create links between the university and the industry.</p>
								<!--<a href="https://www.tripadvisor.com/" target="_blank">
									<div class="tripadvisor-banner">
										<span class="review">Recommended</span>
										<img src="images/icons/tripadvisor.png" alt="Image">
									</div>
								</a>-->
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-widget">
							<h3 class="highlight">VISIT US TODAY</h3>
							<div class="inner">
								<!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAicheSuez%2F&amp;tabs=events&amp;width=280&amp;height=500&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=true&amp;show_facepile=false&amp;appId" style="border:none;overflow:hidden" scrolling="no" allowtransparency="true" width="100%" height="200" frameborder="0" align="center"></iframe>-->
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAicheSuez%2F&amp;tabs=events&amp;width=280&amp;height=500&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=true&amp;show_facepile=false&amp;appId" align="center"  scrolling="yes" allowtransparency="true" frameborder="0" style="border:none;overflow:hidden"  height="200" ></iframe>

							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-widget">
							<h3 class="highlight">CONTACT INFO</h3>
							<div class="inner">
								<ul class="contact-details">
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
											Suez Univ, ElSalam,Suez, Egypt</li>
									<li>
									<i class="fa fa-envelope"></i>
										Email: aichesuez@gmail.com
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										Email: <a href="mailto:admin@aichesusc.org"> admin@aichesusc.org </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end footer-->

		<div class="subfooter">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
							<div class="copyrights">&copy; 2019 <span class="highlight">AIChE SU SC</span>  Designed by<span class="highlight"> IT COMMITTEE</span>.</div>
					</div>
					<div class="col-md-6">
						<div class="social-media">
							<a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/AicheSuez/">
								<i class="fa fa-facebook"></i>
							</a>
							<a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="https://twitter.com/AIChESUSC?s=09">
								<i class="fa fa-twitter"></i>
							</a>
							<a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="https://www.linkedin.com/company/aichesuez">
								<i class="fa fa-linkedin"></i>
							</a>
							<a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="https://m.youtube.com/channel/UCWiYSaQvjHaXCyjHOz3eugw/featured">
								<i class="fa fa-youtube"></i>
							</a>
							<a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/aiche_su_sc/">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>   
	<!-- ======================================  END FOOTER ======================================== --> 

	
<?php
	include 'includes/footer.php';
?>
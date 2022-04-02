<?php
	include 'includes/templates/header.php';
	session_start();

	function go_link() {
		echo (isset($_SESSION['fname']) && !empty($_SESSION['fname'])) ? 'download' : 'resume'; 
	}
	
?>
	<!--=============================== ANVBAR ========================-->
		<div class="container" >
						<img src="assets/images/AIChE logo original H.png" class="img-responsive center-block" width="250px" style="margin-top: 20px" />
					
		</div>
	<div class="clearfix"></div>
	<div class="home">
		<div class="home-img">
			<img src="assets/images/interview.jpg" class="img-responsive" />
		</div>
		<div class="home-content">
			<h1>Design Your CV</h1>
			<p class="lead">We will help you to create an awesome CV. Click on choose your template button to begin.</p>
			<a href="#select_temp" class="choose_btn"><button>Choose Your Template</button></a>
			<a href="http://www.aichesusc.org"><button>Go to our website</button></a>
		</div>
	</div>
	<section class="select_temp_div">
		<div class="container" id="select_temp">
			<div class="row">
				<h2 class="text-center">Select Your Template</h2>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="template-div">
						<a href="<?php go_link() ?>.php?temp=1">
							<img src="assets/images/cvs/cv_1.png" class="img-responsive" />
							<div class="">
								<button class="btn-template">use this template</button>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="template-div">
						<a href="<?php go_link() ?>.php?temp=2">
							<img src="assets/images/cvs/cv_2.png" class="img-responsive" />
							<div class="">
								<button class="btn-template">use this template</button>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer">
	<div class="subfooter">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
							<div class="copyrights">&copy; 2020 <span class="highlight">AIChE SU SC</span>  Designed by<span class="highlight"> WEBSITE COMMITTEE</span>.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		
<?php
	include 'includes/templates/footer.php';
?>
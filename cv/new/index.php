<?php
	session_start();
	
	include 'includes/templates/header.php';
	include 'connect.php';
	
	/*if(isset($_SESSION['fname'])) {
		$fname = $_SESSION['fname'];
		$lname = $_SESSION['lname'];
		$profession = $_SESSION['profession'];
		$address = $_SESSION['address'];
		$phone = $_SESSION['phone'];
		$email = $_SESSION['email'];
		$job_title = $_SESSION['job_title'];
		$employer = $_SESSION['employer'] ;
		$work_city = $_SESSION['work_city'];
		$work_state = $_SESSION['work_state'];
		$start_date = $_SESSION['start_date'];
		$end_date = $_SESSION['end_date'] ;
		$education_university = $_SESSION['education_university'];
		$education_university_location = $_SESSION['education_university_location'];
		$education_university_degree = $_SESSION['education_university_degree'];
		$skill_0 = $_SESSION['skill_0'];
		$summary = $_SESSION['summary'];
	}
	*/
	//session_unset();

	//session_destroy();
	//exit();
	function edit($input) {
		echo (isset($_SESSION[$input])) ? $_SESSION[$input] : '';
	}
	
?>

	<!--=============================== ANVBAR ========================-->
	<header class="nav-cv">
		<div class="container">
			<div class="row">
				<div class="">
					<div class="col-md-2 col-sm-3">
						<img src="assets/images/AIChE logo original H.png" class="img-responsive" width="80%" style="margin-top: 6px" />
					</div>
					<div class="col-md-10 col-sm-12">
						<div style="float: right;">
							<ul class="list-inline">
								<li class="active list_personal_info" id="list_personal_info"><a class="completed" href="#">Heading</a></li>
							    <li class="list_work_history" id="list_work_history"><a href="#">Work History</a></li>
							    <li id="list_education"><a href="#">Education</a></li>
							    <li id="list_skills"><a href="#">Skills and Languages</a></li>
							    <li id="list_summary"><a href="#">Summary</a></li>
							    <li id="list_finalize"><a href="#">Finalize</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--===================================== PRESONAL INFO ================================-->
	<div class="container">
		<div class="row">
		<div class="work_empty" style="display:none;">
					<div class="work_empty_content col-md-4 col-xs-12">
						<a class="close_popup" id="stay_on_page"><i class="fa fa-times" aria-hidden="true"></i></a>
						<h3>More Information Needed</h3>
						<p class="lead" style="font-size:18px">Looks like you haven't entered any past work experience. We recommend that you at least enter your past Position and Company.</p>
						<button class="btn btn-default" id="no_experience">I don't have work experience</button>
						<button class="btn btn-primary" id="stay_on_page_ok">OK</button>
					</div>
				</div>
			<div class="clearfix"></div>
			<h2 class="text-center">Resume</h2><br />
			<form method="post" id="register_cv">
				<!--<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_personal_info">Personal Info</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_work_history">Work History</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_education">Education</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_skills">Skills and Languages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_summary">Summary</a>
					</li>
				</ul>-->
				<div class="tab-content col-md-offset-2 col-md-8" style="margin-top:16px;">
					<form>	
						<div class="tab-pane fade" id="personal_info">
							<h2 class="sectionTitle">What’s the best way for employers to contact you?</h2>
							<p class="sectionPara">We suggest including an email and phone number.</p>
							<div class="form-group" style="padding-left:0px">
								<label for="fname">First Name</label>
								<input type="text" class="form-control input-form" id="fname" name="fname" value="<?php edit('fname') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_fname" class="text-danger"></span>
							</div>
							<div class="form-group" style="padding-right:0px">
								<label for="lname">Last Name</label>
								<input type="text" class="form-control input-form" id="lname" name="lname"  value="<?php edit('lname') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_lname" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="profession">Profession (Optional)</label>
								<input type="text" class="form-control input-form" id="profession" name="profession"  value="<?php edit('profession') ?>" />
								<span id="error_profession" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="profession">Address</label>
								<input type="text" class="form-control input-form" id="address" name="address"  value="<?php edit('address') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_address" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" class="form-control input-form" id="phone" name="phone" value="<?php edit('phone') ?>" />
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_phone" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control input-form" id="email" name="email"  value="<?php edit('email') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_email" class="text-danger"></span>
							</div>
							<div id="bottom-wizard">
								<div class="form-group error_personal_info" style="display: none;">
									<span id="error_personal_info" class="alert-danger alert error_personal_info col-xs-12 error_section" style="text-align: center;"></span>
								</div>
								<button class="btn_personal_info" id="btn_personal_info" type="button">Next</button>
							</div>
						</div>
						<!--================================= WORK HISTORY ===================================-->
						<div class="tab-pane active" id="work_history">
							<h2 class="sectionTitle">Tell us about your most recent job</h2>
							<p class="sectionPara">We’ll start there and work backward.</p>
							<div class="multi-field-wrapper">
								<div class="multi-fields">
									<div class="multi-field">
										<div class="form-group" style="padding-left:0px">
											<label for="job_title">Job Title</label>
											<input type="text" class="form-control input-form" id="job_title_0" name="job_title_0"  value="<?php edit('job_title') ?>"/>
											<i class="fa fa-check success" aria-hidden="true"></i>
											<span id="error_job_title" class="text-danger"></span>
										</div>
										<div class="form-group" style="padding-right:0px">
											<label for="employer">Employer</label>
											<input type="text" class="form-control input-form" id="employer_0" name="employer_0" value="<?php edit('employer') ?>"/>
											<i class="fa fa-check success" aria-hidden="true"></i>
											<span id="error_employer" class="text-danger"></span>
										</div>
										<div class="form-group">
											<label for="profession">City</label>
											<input type="text" class="form-control input-form" id="work_city_0" name="work_city_0" value="<?php edit('work_city') ?>" />
											<i class="fa fa-check success" aria-hidden="true"></i>
											<span id="error_work_city" class="text-danger"></span>
										</div>
										<div class="form-group">
											<label for="work_state">State</label>
											<input type="text" class="form-control input-form" id="work_state_0" name="work_state_0" value="<?php edit('work_state') ?>"/>
											<i class="fa fa-check success" aria-hidden="true"></i>
											<span id="error_work_state" class="text-danger"></span>
										</div>
										<div class="form-group">
											<div class='input-group date' id='datetimepicker6'>
												<label for="start_date">Start Date</label>
												<input type="text" class="form-control input-form" id="start_date_0" name="start_date_0" value="<?php edit('start_date') ?>"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<span id="error_start_date" class="text-danger"></span>
										</div>
										<div class="form-group">
											<div class='input-group date' id='datetimepicker7'>
												<label for="end_date">Start Date</label>
												<input type="text" class="form-control input-form" id="end_date_0" name="end_date_0" value="<?php edit('end_date') ?>"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<span id="error_end_date" class="text-danger"></span>
										</div>
										<div class="form-group work_current">
											<label class="container_check">I currently work here
												<input type="checkbox" name="work_current_0" value="work_current" id="work_current">
												<span class="checkmark"></span>
											</label>
										</div>
										<div>
											<div class="col-md-6">
												<ol contenteditable id="editor" class="editor" style="width=100%">
													<li>First li</li>
												</ol>
												<input type="hidden" name="work_list_0" id="work_list_0"/>
											</div>
											<div class="col-md-6">
												<ul id="works_db">
													<li id="work_1"><a>Managed quality assurance program, including on-site evaluations, internal audits and customer surveys.</a></li>
													<li id="work_2"><a>Monitored social media and online sources for industry trends.</a></li>
													<li id="work_3"><a>Resolved <span style="color:blue"> [Type]</span> problems, improved operations and provided exceptional client support.</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<button type="button" class="add-field">Add field</button>
							</div>
				
							<div id="bottom-wizard" class="col-xs-12">
								<div class="form-group error_work_history" style="display: none;">
									<span id="error_work_history" class="alert-danger alert error_work_history col-xs-12 error_section" style="text-align: center;"></span>
								</div>
								<button type="button" name="previous_btn_work_history" id="previous_btn_work_history" class="btn btn-default btn-lg">Previous</button>
								<button class="btn_work_history" id="btn_work_history" type="button">Next</button>
							</div>
						</div>
						
						<!--================================= EDUCATION ===================================-->
						<div class="tab-pane fade" id="education">
							<h2 class="sectionTitle">Tell us about your Education</h2>
							<p class="sectionPara">We’ll start there and educate.</p>
							<div class="form-group" style="padding-left:0px">
								<label for="education_university">University</label>
								<input type="text" class="form-control input-form" id="education_university" name="education_university" value="<?php edit('education_university') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_education_university" class="text-danger"></span>
							</div>
							<div class="form-group" style="padding-right:0px">
								<label for="education_university_location">Location</label>
								<input type="text" class="form-control input-form" id="education_university_location" name="education_university_location" value="<?php edit('education_university_location') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_education_university_location" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="education_university_degree">Degree</label>
								<input type="text" class="form-control input-form" id="education_university_degree" name="education_university_degree" value="<?php edit('education_university_degree') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_education_university_degree" class="text-danger"></span>
							</div>
							<div id="bottom-wizard">
								<div class="form-group error_education" style="display: none;">
									<span id="error_education" class="alert-danger alert error_education col-xs-12 error_section" style="text-align: center;"></span>
								</div>
								<button type="button" name="previous_btn_education" id="previous_btn_education" class="btn btn-default btn-lg">Previous</button>
								<button class="btn_education" id="btn_education" type="button">Next</button>
							</div>
						</div>
						<!--==================================== SKILLS ===================================-->
						<div class="tab-pane fade" id="skills" style="height:400px">
							<div class="panel panel-default  col-md-6">
								<div class="panel-heading">Tell us about your Skills</div>
								<div class="panel-body">
									<div class="form-group">
										<div class="multi-field-wrapper">
											<div class="multi-fields">
												<?php 
													if(isset($_SESSION['skills'])) {
														for ($skill=0; $skill < count($_SESSION['skills']); $skill++ ){
															if (!empty($_SESSION['skills'][$skill])) {
												?>
																<div class="multi-field">
																	<input type="text" name="<?php echo 'skill_' . $skill ?>" class="skill_input form-control input-form" value="<?php echo $_SESSION['skills'][$skill] ?>">
																	<button type="button" class="remove-field">Remove</button>
																</div>
												<?php		
															}
														}
													} else {
												?>
															<div class="multi-field">
																<input type="text" name="skill_0" class="skill_input form-control input-form">
																<button type="button" class="remove-field">Remove</button>
															</div>
												<?php	
													}
												?>
											</div>
											<button type="button" class="add-field">Add field</button>
										</div>
									</div>
									<div style="text-align:center;">
										<button type="button" name="previous_btn_skills" id="previous_btn_skills" class="btn btn-default btn-lg">Previous</button>
										<button type="button" name="btn_skills" id="btn_skills" class="btn btn-info btn-lg">Next</button>
									</div>
									<br />
								</div>
							</div>
							<div class="col-md-6">
								<ul id="skills_db">
									<li id="skill_1"><a>skill one</a></li>
									<li id="skill_2"><a>teamwork</a></li>
									<li id="skill_3"><a>manage</a></li>
								</ul>
							</div>
						</div>
						<!--================================ SUMMARY ================================-->
						<div class="tab-pane fade" id="summary">
							<div class="panel panel-default">
								<div class="panel-heading">Tell us about your summary</div>
								<div class="panel-body">
									<div class="form-group">
										<label>Summary</label>
										<textarea name="summary" id="summary" rows="4" class="form-control"><?php edit('summary') ?></textarea>
										<span id="error_summary" class="text-danger"></span>
									</div>
									<div align="center">
										<button type="button" name="previous_btn_summary" id="previous_btn_summary" class="btn btn-default btn-lg">Previous</button>
										<button type="button" name="btn_summary" id="btn_summary" class="btn btn-success btn-lg">Submit</button>
									</div>
									<br />
								</div>
							</div>
						</div>
					</form>
					
				</div>
			</form>
		</div>
	</div>

<?php
	include 'includes/templates/footer.php';
?>
<?php
	session_start();
	
	include 'includes/templates/header.php';

	
	/* pesonal info */
	$fname = (isset($_SESSION['fname'])) ? $_SESSION['fname'] : '';
	$lname = (isset($_SESSION['lname'])) ? $_SESSION['lname'] : '';
	$profession = (isset($_SESSION['profession'])) ? $_SESSION['profession'] : '';
	$address = (isset($_SESSION['address'])) ? $_SESSION['address'] : '';
	$phone = (isset($_SESSION['phone'])) ? $_SESSION['phone'] : '';
	$email = (isset($_SESSION['email'])) ? $_SESSION['email'] : '';
	$LinkedIn = (isset($_SESSION['LinkedIn'])) ? $_SESSION['LinkedIn'] : '';
	$Facebook = (isset($_SESSION['Facebook'])) ? $_SESSION['Facebook'] : '';
	$Twitter = (isset($_SESSION['Twitter'])) ? $_SESSION['Twitter'] : '';
	$Website = (isset($_SESSION['Website'])) ? $_SESSION['Website'] : '';
	
	if(isset($_SESSION['work'])){
		$works = $_SESSION['work'];
	}

	if(isset($_SESSION['edu'])){
		$edus = $_SESSION['edu'];
	}

	if(isset($_SESSION['certs'])){
		$certs = $_SESSION['certs'];
	}
	
	
    
	
	function edit($input) {
		echo (isset($_SESSION[$input])) ? $_SESSION[$input] : '';
	}
	
	if(isset($_GET['temp']) && !empty($_GET['temp'])) {
		?>
<!--=============================== ANVBAR ========================-->
<header class="nav-cv">
		<div class="container">
			<div class="row">
				<div class="">
					<div class="col-md-2 col-sm-3 col-xs-6">
						<img src="assets/images/AIChE logo original H.png" class="img-responsive logo_img" width="80%" style="margin-top: 6px" />
					</div>
					<div class="col-md-10 col-sm-12 hidden-xs hidden-sm">
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
	<div class="container" style="margin-bottom:50px">
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
			<h2 class="text-center">Design Your CV</h2><br />					
			<form method="post" id="register_cv">
				<div class="tab-content" style="margin-top:16px;">
						
						<div class="tab-pane active col-md-8" id="personal_info">
							<h2 class="sectionTitle">What’s the best way for employers to contact you?</h2>
							<p class="sectionPara">We suggest including an email and phone number.</p>
							<div class="form-group" style="padding-left:0px">
								<label for="fname">First Name <span style="color:red">(Required)</span></label>
								<input type="text" class="form-control input-form" id="fname" name="fname" value="<?php edit('fname') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_fname" class="text-danger"></span>
							</div>
							<div class="form-group" style="padding-right:0px">
								<label for="lname">Last Name <span style="color:red">(Required)</span></label>
								<input type="text" class="form-control input-form" id="lname" name="lname"  value="<?php edit('lname') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_lname" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="profession">Profession</label>
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
								<label for="phone">Phone <span style="color:red">(Required)</span></label>
								<input type="text" class="form-control input-form" id="phone" name="phone" value="<?php edit('phone') ?>" />
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_phone" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="email">Email <span style="color:red">(Required)</span></label>
								<input type="email" class="form-control input-form" id="email" name="email"  value="<?php edit('email') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
								<span id="error_email" class="text-danger"></span>
							</div>
							<h4 class="sectionTitle" style="font-size:15px;padding-bottom:5px;">Social Links</h4>
							<div class="form-group">
								<label for="LinkedIn">LinkedIn</label>
								<input type="text" class="form-control input-form" id="LinkedIn" name="LinkedIn"  value="<?php edit('LinkedIn') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
							</div>
							<div class="form-group">
								<label for="Facebook">Facebook</label>
								<input type="text" class="form-control input-form" id="Facebook" name="Facebook"  value="<?php edit('Facebook') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
							</div>
							<div class="form-group">
								<label for="Twitter">Twitter</label>
								<input type="text" class="form-control input-form" id="Twitter" name="Twitter"  value="<?php edit('Twitter') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
							</div>
							<div class="form-group">
								<label for="Website">Website</label>
								<input type="url" class="form-control input-form" id="Website" name="Website"  value="<?php edit('Website') ?>"/>
								<i class="fa fa-check success" aria-hidden="true"></i>
							</div>
							<div id="bottom-wizard">
								<div class="form-group error_personal_info" style="display: none;">
									<span id="error_personal_info" class="alert-danger alert error_personal_info col-xs-12 error_section" style="text-align: center;"></span>
								</div>
								<button class="btn_personal_info" id="btn_personal_info" type="button">Next</button>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--================================= WORK HISTORY ===================================-->
						<div class="tab-pane fade" id="work_history">
						<h2 class="sectionTitle">Tell us about your most recent job</h2>
							<p class="sectionPara">We’ll start there and work backward.</p>
							<div class="col-md-7">
							<div class="multi-field-wrapper-work">
								<div class="multi-fields">
								<?php
									if(isset($works) && !empty($works)) {
										for ($i=0; $i<count($works); $i++) {
										$job_title_name = 'job_title_' . $i;
										$employer_name = 'employer_' . $i;
										$city_name = 'work_city_' . $i;
										$work_state = 'work_state_' . $i;
										$start_date = 'start_date_' . $i;
										$end_date = 'end_date_' . $i;
										$work_current = 'work_current_' . $i;
										$editor_name = 'editor_' . $i;
										$work_list = 'work_list_' . $i;
										$lists = explode("_-_", $works[$i][6]);
								?>
									<div class="multi-field" style="margin-bottom:10px">
										<h3>Work</h3>
										<div class="form-group" style="padding-left:0px">
											<label for="job_title">Job Title</label>
											<input type="text" name="<?php echo $job_title_name ?>" id="<?php echo $job_title_name ?>" class="job_title_input form-control input-form" value="<?php echo $works[$i][0] ?>">
											<i class="fa fa-check success" aria-hidden="true"></i>
											<span id="error_job_title" class="text-danger"></span>
										</div>
										<div class="form-group" style="padding-right:0px">
											<label for="job_title">Employer</label>
											<input type="text" class="employer_input form-control input-form" id="<?php echo $employer_name ?>" name="<?php echo $employer_name ?>" value="<?php echo $works[$i][1] ?>"/>
										</div>
										<div class="form-group">
											<label for="profession">City</label>
											<input type="text" class="form-control input-form work_city_input" id="<?php echo $city_name ?>" name="<?php echo $city_name ?>" value="<?php echo $works[$i][2] ?>" />
										</div>
										<div class="form-group">
											<label for="work_state">State</label>
											<input type="text" class="form-control input-form work_state_input" id="<?php echo $work_state ?>" name="<?php echo $work_state ?>" value="<?php echo $works[$i][3] ?>"/>
										</div>
										<div class="form-group">
											<label for="start_date">Start Date</label>
											<input type="text" class="form-control input-form start_date_input" placeholder="MM/YYYY Ex: 09/2020" id="<?php echo $start_date ?>" name="<?php echo $start_date ?>" value="<?php echo $works[$i][4] ?>"/>
										</div>
										<div class="form-group">
											<label for="end_date">End Date</label>
											<input type="text" class="form-control input-form end_date_input" id="<?php echo $end_date ?>" name="<?php echo $end_date ?>" value="<?php echo ($works[$i][5] != 'current') ? $works[$i][5] : ''  ?>"  <?php echo ($works[$i][5] == 'current') ? 'disabled' : ''  ?>/>
										</div>
										<div class="form-group work_current">
											<label class="container_check">I currently work here
												<input type="checkbox" class="work_current_input" name="<?php echo $work_current ?>" value="<?php echo $work_current ?>" id="<?php echo $work_current ?>" <?php echo ($works[$i][5] == 'current') ? 'checked' : '' ?> />
												<span class="checkmark"></span>
											</label>
										</div>
										<div>
											<div class="">
												<ul contenteditable  class="editor editor_input" id="<?php echo $editor_name ?>" style="width=100%">
												<?php
												for ($y=0; $y<count($lists); $y++) {
													?>
													<li><?php echo $lists[$y] ?></li>
													<?php
												}
												?>
												</ul>
												<input type="hidden" name="<?php echo $work_list ?>" id="<?php echo $work_list ?>" class="work_list_input"/>
											</div>
										</div>
										<div style="height:35px">
											<button type="button" class="remove-work-field btn-danger">Remove job</button>
										</div>
									</div>
								<?php
									}
								} else {
								?>
									<div class="multi-field" style="margin-bottom:10px">
										<h3>Work</h3>
										<div class="form-group" style="padding-left:0px">
											<label for="job_title">Job Title</label>
											<input type="text" name="job_title_0" id="job_title_0" class="job_title_input form-control input-form">
											<i class="fa fa-check success" aria-hidden="true"></i>
											<span id="error_job_title" class="text-danger"></span>
										</div>
										<div class="form-group" style="padding-right:0px">
											<label for="job_title">Employer</label>
											<input type="text" class="employer_input form-control input-form" id="employer_0" name="employer_0"/>
										</div>
										<div class="form-group">
											<label for="profession">City</label>
											<input type="text" class="form-control input-form work_city_input" id="work_city_0" name="work_city_0" />
										</div>
										<div class="form-group">
											<label for="work_state">State</label>
											<input type="text" class="form-control input-form work_state_input" id="work_state_0" name="work_state_0" />
										</div>
										<div class="form-group">
											<label for="start_date">Start Date</label>
											<input type="text" placeholder="MM/YYYY Ex: 01/2015" class="form-control input-form start_date_input" id="start_date_0" name="start_date_0" />
										</div>
										<div class="form-group">
											<label for="end_date">End Date</label>
											<input type="text" placeholder="MM/YYYY Ex: 09/2020" class="form-control input-form end_date_input" id="end_date_0" name="end_date_0" />
										</div>
										<!--<div class="form-group">
											<div class='input-group date start_date' id='datetimepicker_start_0'>
												<label for="start_date">Start Date</label>
												<input type="text" class="form-control input-form start_date_input" id="start_date_0" name="start_date_0"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>-->
										<div class="form-group work_current">
											<label class="container_check">I currently work here
												<input type="checkbox" class="work_current_input" name="work_current_0" value="work_current" id="work_current_0">
												<span class="checkmark"></span>
											</label>
										</div>
										<div>
											<div class="editor_list">
												<p class="sectionPara">What did you do at this job?</p>
												<ul contenteditable  class="editor editor_input" id="editor_0" style="width=100%">
													<li>First li</li>
												</ul>
												<input type="hidden" name="work_list_0" id="work_list_0" class="work_list_input"/>
											</div>
											
										</div>
										<div style="height:35px">
											<button type="button" class="remove-work-field btn-danger">Remove job</button>
										</div>
										<hr/>
									</div>
								<?php
								}
								?>
									
								</div>
								<button type="button" class="add-field">Add field</button>
							</div>			
				
							<div id="bottom-wizard" class="col-xs-12">
								<div class="form-group error_work_history" style="display: none;">
									<span id="error_work_history" class="alert-danger alert error_work_history col-xs-12 error_section" style="text-align: center;"></span>
								</div>
								<a type="button" name="previous_btn_work_history" id="previous_btn_work_history" class="btn btn-default btn-lg btn_blank">Previous</a>
								<button class="btn_work_history" id="btn_work_history" type="button">Next</button>
							</div>
							</div>
							<div class="col-md-5 hidden-xs">
								<div class="work_list_db help_list">
								<p class="sectionPara">Get help writing your bullet points with the pre-written examples below.</p>
								<p>Click to copy</p>
								<div class="help_list_item work_list_item">
									<P>Handled <span style="color: blue; ">[Number]</span> calls per <span style="color: blue; ">[Timeframe]</span> to address customer inquiries and concerns.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Increased customer satisfaction by resolving <span style="color: blue; ">[Product or Service] </span>issues.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Worked with <span style="color: blue; ">[Type]</span> customers to understand needs and provide <span style="color: blue; ">[Type]</span> service.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Managed quality assurance program, including on-site evaluations, internal audits and customer surveys.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Drove operational improvements which resulted in savings and improved profit margins.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Saved $ <span style="color: blue; ">[Amount]</span> by implementing cost-saving initiatives that addressed long-standing problems.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Led <span style="color: blue; ">[Type]</span> team in delivery of <span style="color: blue; ">[Type]</span> project, resulting in <span style="color: blue; ">[Result]</span>.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Developed team communications and information for  <span style="color: blue; ">[Type]</span> meetings.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Maintained excellent attendance record, consistently arriving to work on time.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Transported <span style="color: blue; ">[Product or Service]</span> to customer locations <span style="color: blue; ">[Timeframe]</span>.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Devoted special emphasis to punctuality and worked to maintain outstanding attendance record, consistently arriving to work ready to start immediately.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Resolved <span style="color: blue; ">[Type]</span> problems, improved operations and provided exceptional client support.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Resolved conflicts and negotiated mutually beneficial agreements between parties.</p>
									<i class="fa fa-clone"></i>
								</div>
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<!--================================= EDUCATION ===================================-->
						<div class="tab-pane fade" id="education">
							<div class="col-md-8">
							<h2 class="sectionTitle">Tell us about your Education</h2>
							<p class="sectionPara">We’ll start there and educate.</p>
							<div class="multi-field-wrapper-edu">
								<div class="multi-fields-edu">
									<?php
									if(isset($edus) && !empty($edus)) {
										for ($i=0; $i<count($edus); $i++) {
										$university_name = 'education_university_' . $i;
										$location_name = 'education_university_location_' . $i;
										$degree_name = 'education_university_degree_' . $i;
										$edu_start_date = 'start_date_edu_' . $i;
										$edu_end_date = 'end_date_edu_' . $i;
										$edu_current = 'work_current_edu_' . $i;
									?>
									<div class="multi-field-edu" style="margin-bottom:10px">
										<h3>Education</h3>
										<div class="form-group" style="padding-left:0px">
											<label for="education_university">University</label>
											<input type="text" class="form-control input-form education_university_input" id="<?php echo $university_name ?>" name="<?php echo $university_name ?>" value="<?php echo $edus[$i][0] ?>"/>
											<i class="fa fa-check success" aria-hidden="true"></i>
										</div>
										<div class="form-group" style="padding-right:0px">
											<label for="education_university_location">Location</label>
											<input type="text" class="form-control input-form education_university_location_input" id="<?php echo $location_name ?>" name="<?php echo $location_name ?>" value="<?php echo $edus[$i][1] ?>"/>
											<i class="fa fa-check success" aria-hidden="true"></i>
										</div>
										<div class="form-group">
											<label for="education_university_degree">Degree</label>
											<input type="text" class="form-control input-form education_university_degree_input" id="<?php echo $degree_name ?>" name="<?php echo $degree_name ?>" value="<?php echo $edus[$i][2] ?>"/>
											<i class="fa fa-check success" aria-hidden="true"></i>
										</div>
										<div class="form-group">
											<label for="start_date">Start Date</label>
											<input type="text" class="form-control input-form start_date_edu_input" id="<?php echo $edu_start_date ?>" name="<?php echo $edu_start_date ?>" value="<?php echo $edus[$i][3] ?>"/>
										</div>
										<div class="form-group">
											<label for="end_date">End Date</label>
											<input type="text" class="form-control input-form end_date end_date_edu_input" id="<?php echo $edu_end_date ?>" name="<?php echo $edu_end_date ?>" value="<?php echo ($edus[$i][4] != 'current') ? $edus[$i][4] : '' ?>"  <?php echo ($edus[$i][4] == 'current') ? 'disabled' : ''  ?>/>
										</div>
										<div class="form-group work_current">
											<label class="container_check">I currently study here
												<input type="checkbox" class="work_current_edu_input" name="<?php echo $edu_current ?>" value="work_current" id="<?php echo $edu_current ?>" <?php echo ($edus[$i][4] == 'current') ? 'checked' : ''  ?> />
												<span class="checkmark"></span>
											</label>
										</div>
										<div style="height:35px;float:right">
											<button type="button" class="remove-edu-field btn-danger">Remove field</button>
										</div>
										<hr/>
									</div>
										<?php } 
										} else {
										?>
										<div class="multi-field-edu" style="margin-bottom:10px">
											<h3>Education</h3>
											<div class="form-group" style="padding-left:0px">
												<label for="education_university">University</label>
												<input type="text" class="form-control input-form education_university_input" id="education_university_0" name="education_university_0" value=""/>
												<i class="fa fa-check success" aria-hidden="true"></i>
											</div>
											<div class="form-group" style="padding-right:0px">
												<label for="education_university_location">Location</label>
												<input type="text" class="form-control input-form education_university_location_input" id="education_university_location_0" name="education_university_location_0" value=""/>
												<i class="fa fa-check success" aria-hidden="true"></i>
											</div>
											<div class="form-group">
												<label for="education_university_degree">Degree</label>
												<input type="text" class="form-control input-form education_university_degree_input" id="education_university_degree_0" name="education_university_degree_0" value=""/>
												<i class="fa fa-check success" aria-hidden="true"></i>
											</div>
											<div class="form-group">
												<label for="start_date">Start Date</label>
												<input type="text" class="form-control input-form start_date_edu_input" id="start_date_edu_0" name="start_date_edu_0"/>
											</div>
											<div class="form-group">
												<label for="end_date">End Date</label>
												<input type="text" class="form-control input-form end_date end_date_edu_input" id="end_date_edu_0" name="end_date_edu_0"/>
											</div>
											<div class="form-group work_current">
												<label class="container_check">I currently study here
													<input type="checkbox" class="work_current_edu_input" name="work_current_edu_0" value="work_current" id="work_current_edu_0">
													<span class="checkmark"></span>
												</label>
											</div>

											<div style="height:35px;float:right">
												<button type="button" class="remove-edu-field btn-danger">Remove field</button>
											</div>
											<div class="clearfix"></div>
											<hr/>
										</div>
										<?php
										} ?>
								</div>
								<button type="button" class="add-field-edu">Add field</button>
							</div>	
							<div id="bottom-wizard">
								<div class="form-group error_education" style="display: none;">
									<span id="error_education" class="alert-danger alert error_education col-xs-12 error_section" style="text-align: center;"></span>
								</div>
								<a type="button" name="previous_btn_education" id="previous_btn_education" class="btn btn-default btn-lg btn_blank">Previous</a>
								<button class="btn_education" id="btn_education" type="button">Next</button>
							</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<!--================================ SKILLS =================================-->
						<div class="tab-pane fade" id="skills">
							<h2 class="sectionTitle">Tell us about your Skills</h2>
							<p class="sectionPara">What skills do you want to highlight?</p>	
							<div class="panel col-md-7">
								
										<div class="multi-field-wrapper-skills">
											<div class="multi-fields-skills">
												<?php 
													if(isset($_SESSION['skills'])) {
														for ($skill=0; $skill < count($_SESSION['skills']); $skill++ ){
															if (!empty($_SESSION['skills'][$skill])) {
												?>
																<div class="multi-field-skill" style="margin-bottom:10px;">
																	<input type="text" name="<?php echo 'skill_' . $skill ?>" class="skill_input form-control input-form col-xs-11" value="<?php echo $_SESSION['skills'][$skill] ?>">
																	<button type="button" class="remove-skill-field btn-danger col-xs-1"><span class="glyphicon glyphicon-remove"></span></button>
																	<div class="clearfix"></div>
																</div>
												<?php		
															}
														}
													} else {
												?>
															<div class="multi-field-skill" style="margin-bottom:10px">
																<input type="text" name="skill_0" class="skill_input form-control input-form col-xs-11">
																<button type="button" class="remove-skill-field btn-danger col-xs-1">
																<span class="glyphicon glyphicon-remove"></span></button>
																<div class="clearfix"></div>
															</div>
												<?php	
													}
												?>
											</div>
											<button type="button" class="add-skill-field">Add field</button>
										</div>
									
									<div style="text-align:center;">
										<a type="button" name="previous_btn_skills" id="previous_btn_skills" class="btn btn-default btn-lg btn_blank">Previous</a>
										<button type="button" name="btn_skills" id="btn_skills">Next</button>
									</div>
									<br />
								
							</div>
							<div class="col-md-5 hidden-xs">
								<ul id="skills_db" class="work_list_db help_list skill_list">
								<p class="sectionPara">Use our expert recommendations below to get started.</p>
								<p>Click to Add</p>
									<li id="skill_1" class="skill_list_item"><a>Operational improvement</a></li>
									<li id="skill_2" class="skill_list_item"><a>Supervision</a></li>
									<li id="skill_3" class="skill_list_item"><a>Relationship development</a></li>
									<li id="skill_4" class="skill_list_item"><a>MS Office</a></li>
									<li id="skill_5" class="skill_list_item"><a>Process improvement</a></li>
									<li id="skill_6" class="skill_list_item"><a>Business operations</a></li>
									<li id="skill_7" class="skill_list_item"><a>Project organization</a></li>
									<li id="skill_8" class="skill_list_item"><a>Team management</a></li>
								</ul>
							</div>
						</div>
						<!--================================ SUMMARY ================================-->
						<div class="tab-pane fade" id="summary">
						
							<div class="col-md-7">
							
								<div class="panel-body">
								<h2 class="sectionTitle">Professional Summary</h2>
							<p class="sectionPara">Use our expert recommendations below to get started.</p>
									<div class="form-group">
										<label>Summary</label>
										<textarea name="summary" id="summary_area" rows="6" class="form-control"><?php edit('summary') ?></textarea>
										<span id="error_summary" class="text-danger"></span>
									</div>
									<h2 class="sectionTitle">Certificates</h2>
									<p class="sectionPara">Showcase your certifications to an employer.</p>
									<div class="multi-field-wrapper-cert">
										<div class="multi-fields-cert">
										
									<?php
									if(isset($certs) && !empty($certs)) {
										for ($i=0; $i<count($certs); $i++) {
										$date_cert = 'date_cert_' . $i;
										$name_cert = 'name_cert_' . $i;
									?>	<div class="multi-field-cert" style="margin-bottom:10px">
												<div class="form-group col-sm-2" style="padding-left:0px;padding-right:5px;">
													<label for="date_cert_input">Date</label>
													<input type="text" class="form-control input-lg input-form date_cert_input" id="<?php echo $date_cert ?>" name="<?php echo $date_cert ?>" placeholder="Date" value="<?php echo $certs[$i][0] ?>"/>
												</div>
												<div class="form-group col-sm-9 col-xs-10" style="padding-left:0px;">
													<label for="name_cert_input">Certificate</label>
													<input type="text" class="form-control input-lg input-form name_cert_input" id="<?php echo $name_cert ?>" name="<?php echo $name_cert ?>" placeholder="Certificate Name" value="<?php echo $certs[$i][1] ?>"/>
												</div>
												<button type="button" class="remove-cert-field btn-danger col-sm-1 col-xs-2">
													<span class="glyphicon glyphicon-remove"></span>
												</button>
												<div class="clearfix"></div>
											</div>
										
									<?php
										} 
									}else {
									?>
											<div class="multi-field-cert" style="margin-bottom:10px">
												<div class="form-group col-sm-2" style="padding-left:0px;padding-right:5px;">
													<label for="date_cert_input">Date</label>
													<input type="text" class="form-control input-lg input-form date_cert_input" id="date_cert_0" name="date_cert_0" placeholder="Date"/>
												</div>
												<div class="form-group col-sm-9 col-xs-10" style="padding-left:0px;">
													<label for="name_cert_input">Certificate</label>
													<input type="text" class="form-control input-lg input-form name_cert_input" id="name_cert_0" name="name_cert_0" placeholder="Certificate Name"/>
												</div>
												<button type="button" class="remove-cert-field btn-danger col-sm-1 col-xs-2">
													<span class="glyphicon glyphicon-remove"></span>
												</button>
												<div class="clearfix"></div>
											</div>
										
									<?php
										}
									?>
									</div>
										<button type="button" class="add-field-cert">Add field</button>
									</div>
									<div style="text-align:right;">
										<a type="button" name="previous_btn_summary" id="previous_btn_summary" class="btn btn-default btn-lg btn_blank">Previous</a>
										<button type="button" name="btn_summary" id="btn_summary" class="submit_btn">Submit</button>
									</div>
									<br />
								</div>
							</div>
							<div class="col-md-5 hidden-xs">
								<div class="summary_list_db help_list">
								<p class="sectionPara">Use our expert recommendations below to get started.</p>
								<p>Click to Add</p>
								<div class="help_list_item work_list_item">
								<p> Enthusiastic <span style="color: blue; ">[Job Title]</span> eager to contribute to team success through hard work, attention to detail and excellent organizational skills. Clear understanding of <span style="color: blue; ">[Task]</span>and <span style="color: blue; ">[Task]</span> and training in <span style="color: blue; ">[Skill]</span>. Motivated to learn, grow and excel in <span style="color: blue; ">[Industry]</span>.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Senior <span style="color: blue; ">[Job Title]</span> and outstanding performer in <span style="color: blue; ">[Skill]</span> and <span style="color: blue; ">[Skill]</span> within <span style="color: blue; ">[Industry]</span>. Proven success in leadership, operational excellence and organizational development with keen understanding of elements of <span style="color: blue; ">[Type]</span> business. Recognized for inspiring management team members to excel and encouraging creative work environments.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Multi-talented <span style="color: blue; ">[Job Title] </span> consistently rewarded for success in planning and operational improvements. Experience in policy development and staff management procedures positively impacting overall morale and productivity.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p><span style="color: blue; ">[Job Title]</span> with over <span style="color: blue; ">[Number]</span> years of successful experience in <span style="color: blue; ">[Skill]</span> and <span style="color: blue; ">[Skill]</span>. Recognized consistently for performance excellence and contributions to success in <span style="color: blue; ">[Industry]</span> industry. Strengths in <span style="color: blue; ">[Skill]</span> and <span style="color: blue; ">[Skill]</span> backed by training in <span style="color: blue; ">[Area of study]</span>.</p>
									<i class="fa fa-clone"></i>
								</div>
								<div class="help_list_item work_list_item">
									<p>Experienced <span style="color: blue; ">[Job Title]</span> with over <span style="color: blue; ">[Number]</span> years of experience in <span style="color: blue; ">[Industry]</span>. Excellent reputation for resolving problems, improving customer satisfaction, and driving overall operational improvements. Consistently saved costs while increasing profits.</p>
									<i class="fa fa-clone"></i>
								</div>
								
								</div>
							</div>
							
						</div>
					
				</div>
			</form>
		</div>
	</div>
		<?php

	} else {
		header('Location: index.php');
	}
?>
	
	
	
	<div class="copy-check"> <span>Text Copied</span> <i class="fa fa-check" aria-hidden="true"></i></div>
<?php
	include 'includes/templates/footer.php';
?>
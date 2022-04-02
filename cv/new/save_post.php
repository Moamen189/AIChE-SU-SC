<?php
	session_start();
	include 'connect.php';
	include 'includes/templates/header.php';
	
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
	$skills = $_SESSION['skills'];
	$summary = $_SESSION['summary'];
print_r($skills);
?>

<!--============================= CV DESIGN =============================-->
<div class="CV">
	<div class="resume col-xs-12" id="resume" style="padding-right:0px;padding-left:0px;">
		<div class="resume-left">
			<div class="name">
				<span><?php echo $fname ?></span>
				<span><?php echo $lname ?></span>
			</div>
			<div class="resumeTitle"><?php echo $profession ?></div>
			<div class="resume-left_sections personal-info">
				<div class="personal-info-head">
					<span class="resume-left_headings sectionTitle">Contact</span>
				</div>
				<div class="info-list">
					<div class="personal-info-address">
						<span class="sectionTxtBold">address</span> 
						<span><?php echo $address ?></span>
					</div>
					<div class="personal-info-phone">
						<span class="sectionTxtBold">Phone</span> 
						<span><?php echo $phone ?></span>
					</div>
					<div class="personal-info-email">
						<span class="sectionTxtBold">Email</span> 
						<span><?php echo $email ?></span>
					</div>
					<div class="personal-info-linkedin">
						<span class="sectionTxtBold">LinkedIn</span> 
						<span>https://www.facebook.com</span>
					</div>
				</div>
			</div>
			<?php if(!empty($skills)) { 
				//$skills = array_filter($skills);
				?> 
				<div class="resume-left_sections skills">
					<div class="personal-info-head">
						<span class="resume-left_headings sectionTitle">Skills</span>
					</div>
					<div class="info-list">
						<?php for ($skill=0; $skill< count($skills); $skill++) {
							if (!empty($skills[$skill])) {
						?>
							<div>
								<span><?php echo $skills[$skill] ?></span>
							</div>
						<?php
							}
						} 
						?>
					</div>
				</div>
			<?php } ?>	
			<div class="resume-left_sections langs">
				<div class="personal-info-head">
					<span class="resume-left_headings sectionTitle">languages</span>
				</div>
				<div class="info-list">
					<div class="personal-info-address">
						<span>English</span>
						<div class="progress-bar">
							<div class="progress-bar-white"></div>
						</div>
					</div>
					<div class="personal-info-phone">
						<span>Arabic</span>
						<div class="progress-bar">
							<div class="progress-bar-white" style="width: 100%"></div>
						</div>
					</div>
					<div class="personal-info-email">
						<span>French</span>
						<div class="progress-bar">
							<div class="progress-bar-white" style="width: 25%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="resume_right">
			<?php if(!empty($summary)) { ?> 
				<div class="summary">
					<span>
					<?php echo $summary ?>
					</span>
				</div>
			<?php } ?>	
			<?php if(!empty($job_title)) { ?> 
				<div class="resume_right-sections work-history">
					<div class="resume-right_headings">
						<span class="sectionTitle sectionTitleRight">Work History</span>
					</div>
					<div class="work">
						<div class="work-date">
							<span class="start-date"><?php echo $start_date ?></span>
							<span class="end-date"><?php echo $end_date ?></span>
						</div>
						<div class="work-info">
							<span class="work-head"><?php echo $job_title ?> | <?php echo $employer ?></span>
							<span class="work-location"><?php echo $work_city ?>, <?php echo $work_state ?></span>
							<div class="work-details">
								<ul>
									<li>
									Orchestrated efficient large-scale software deployments, including testing features and correcting code.
									</li>
									<li>
									Collaborated with cross-functional development team members to analyze potential system solutions based on evolving client requirements.
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if(!empty($education_university)) { ?> 
				<div class="resume_right-sections School">
					<div class="resume-right_headings">
						<span class="sectionTitle sectionTitleRight">School</span>
					</div>
					<!--<div class="work">
						<div class="work-date">
							<span class="start-date">2018-05-</span>
							<span class="end-date">2020-11</span>
						</div>
						<div class="work-info">
							<span class="work-head">Senior Software Engineer</span>
							<span class="work-location">Suez, Dakahlia</span>
							<div class="work-details">
								<ul>
									<li>
									Orchestrated efficient large-scale software deployments, including testing features and correcting code.
									</li>
									<li>
									Collaborated with cross-functional development team members to analyze potential system solutions based on evolving client requirements.
									</li>
								</ul>
							</div>
						</div>
					</div>-->
					<div class="work">
						<div class="work-date">
							<span class="start-date">2018-05-</span>
							<span class="end-date">2020-11</span>
						</div>
						<div class="work-info">
							<span class="work-head"><?php echo $education_university ?> | <?php echo $education_university_degree ?></span>
							<span class="work-location"><?php echo $education_university_location ?></span>
							<div class="work-details">
								<ul>
									<li>
									Orchestrated efficient large-scale software deployments, including testing features and correcting code.
									</li>
									<li>
									Collaborated with cross-functional development team members to analyze potential system solutions based on evolving client requirements.
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>
<button type="button" id="downloadResume" style="display: block;">Capture</button>
<button type="button" style="display: block;"><a href="<?php echo 'index.php' ?>">EDIT</a></button>

<?php
	include 'includes/templates/footer.php';
?>
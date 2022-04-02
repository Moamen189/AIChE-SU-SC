<?php
	session_start();
	include 'connect.php';

	$work_list = filter_var($_POST['work_list'], FILTER_SANITIZE_STRING);
	echo $work_list;
	/*$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
	$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
	$profession = filter_var($_POST['profession'], FILTER_SANITIZE_STRING);
	$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
	$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$job_title = filter_var($_POST['job_title'], FILTER_SANITIZE_STRING);
	$employer = filter_var($_POST['employer'], FILTER_SANITIZE_STRING);
	$work_city = filter_var($_POST['work_city'], FILTER_SANITIZE_STRING);
	$work_state = filter_var($_POST['work_state'], FILTER_SANITIZE_STRING);
	$start_date = filter_var($_POST['start_date'], FILTER_SANITIZE_STRING);
	$end_date = filter_var($_POST['end_date'], FILTER_SANITIZE_STRING);
	$education_university = filter_var($_POST['education_university'], FILTER_SANITIZE_STRING);
	$education_university_location = filter_var($_POST['education_university_location'], FILTER_SANITIZE_STRING);
	$education_university_degree = filter_var($_POST['education_university_degree'], FILTER_SANITIZE_STRING);
	$skills = [];
	for ($x=0; $x < 10 ;$x++) {
		$skill_num = 'skill_' . $x;
		if (isset($_POST[$skill_num])) {
			array_push($skills, $_POST[$skill_num]);
		}
	}
	$summary = filter_var($_POST['summary'], FILTER_SANITIZE_STRING);

	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['profession'] = $profession;
	$_SESSION['address'] = $address;
	$_SESSION['phone'] = $phone;
	$_SESSION['email'] = $email;
	$_SESSION['job_title'] = $job_title;
	$_SESSION['employer'] = $employer;
	$_SESSION['work_city'] = $work_city;
	$_SESSION['work_state'] = $work_state;
	$_SESSION['start_date'] = $start_date;
	$_SESSION['end_date'] = $end_date;
	$_SESSION['education_university'] = $education_university;
	$_SESSION['education_university_location'] = $education_university_location;
	$_SESSION['education_university_degree'] = $education_university_degree;
	$_SESSION['skills'] = $skills;
	$_SESSION['summary'] = $summary;*/
	
?>
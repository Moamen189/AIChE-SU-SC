<?php
	session_start();
    include 'connect.php';
    /************************************* PERSONAL INFO *****************************************/
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
	$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
	$profession = filter_var($_POST['profession'], FILTER_SANITIZE_STRING);
	$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
	$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $LinkedIn = filter_var($_POST['LinkedIn'], FILTER_SANITIZE_STRING);
    $Facebook = filter_var($_POST['Facebook'], FILTER_SANITIZE_STRING);
    $Twitter = filter_var($_POST['Twitter'], FILTER_SANITIZE_STRING);
    $Website = filter_var($_POST['Website'], FILTER_SANITIZE_STRING);
    /********************************** WORK SECTION  ************************/
    $works  = [];
    $work_0 = [];
    $work_1 = [];
    $work_2 = [];
    $work_3 = [];
    $work_4 = [];
	
    //0   
    $job_title_num = 'job_title_' . '0';
    $employer_num = 'employer_' . '0';
    $work_city_num = 'work_city_' . '0';
    $work_state_num = 'work_state_' . '0';
    $start_date_num = 'start_date_' . '0';
    $end_date_num = 'end_date_' . '0';
    $work_current_num = 'work_current_' . '0';
    $work_list_num = 'work_list_' . '0';
    if (isset($_POST[$job_title_num])) {
        array_push($work_0, $_POST[$job_title_num]);
    }
    if (isset($_POST[$employer_num])) {
        array_push($work_0, $_POST[$employer_num]);
    }
    if (isset($_POST[$work_city_num])) {
        array_push($work_0, $_POST[$work_city_num]);
    }
    if (isset($_POST[$work_state_num])) {
        array_push($work_0, $_POST[$work_state_num]);
    }
    if (isset($_POST[$start_date_num])) {
        array_push($work_0, $_POST[$start_date_num]);
    }
    if (isset($_POST[$end_date_num]) && !empty($_POST[$end_date_num]) && !isset($_POST[$work_current_num])) {
        array_push($work_0, $_POST[$end_date_num]);
        echo 'tr';
    } else {
        array_push($work_0, 'current');
        echo 'd';
    }
    if(isset($_POST[$work_list_num])) {
        array_push($work_0, $_POST[$work_list_num]);
    }
    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($works , $work_0);
    }
    
    //1
    $job_title_num = 'job_title_' . '1';
    $employer_num = 'employer_' . '1';
    $work_city_num = 'work_city_' . '1';
    $work_state_num = 'work_state_' . '1';
    $start_date_num = 'start_date_' . '1';
    $end_date_num = 'end_date_' . '1';
    $work_current_num = 'work_current_' . '1';
    $work_list_num = 'work_list_' . '1';

    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($work_1, $_POST[$job_title_num]);
    }
    if (isset($_POST[$employer_num])) {
        array_push($work_1, $_POST[$employer_num]);
    }
    if (isset($_POST[$work_city_num])) {
        array_push($work_1, $_POST[$work_city_num]);
    }
    if (isset($_POST[$work_state_num])) {
        array_push($work_1, $_POST[$work_state_num]);
    }
    if (isset($_POST[$start_date_num])) {
        array_push($work_1, $_POST[$start_date_num]);
    }
    if (isset($_POST[$end_date_num]) && !empty($_POST[$end_date_num]) && !isset($_POST[$work_current_num])) {
        array_push($work_1, $_POST[$end_date_num]);
    } else {
        array_push($work_1, 'current');
    }
    if(isset($_POST[$work_list_num])) {
        array_push($work_1, $_POST[$work_list_num]);
    }
    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($works , $work_1);
    }
   
    //2
    $job_title_num = 'job_title_' . '2';
    $employer_num = 'employer_' . '2';
    $work_city_num = 'work_city_' . '2';
    $work_state_num = 'work_state_' . '2';
    $start_date_num = 'start_date_' . '2';
    $end_date_num = 'end_date_' . '2';
    $work_current_num = 'work_current_' . '2';
    $work_list_num = 'work_list_' . '2';

    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($work_2, $_POST[$job_title_num]);
    }
    if (isset($_POST[$employer_num])) {
        array_push($work_2, $_POST[$employer_num]);
    }
    if (isset($_POST[$work_city_num])) {
        array_push($work_2, $_POST[$work_city_num]);
    }
    if (isset($_POST[$work_state_num])) {
        array_push($work_2, $_POST[$work_state_num]);
    }
    if (isset($_POST[$start_date_num])) {
        array_push($work_2, $_POST[$start_date_num]);
    }
    if (isset($_POST[$end_date_num]) && !empty($_POST[$end_date_num]) && !isset($_POST[$work_current_num])) {
        array_push($work_2, $_POST[$end_date_num]);
    } else {
        array_push($work_2, 'current');
    }
    if(isset($_POST[$work_list_num])) {
        array_push($work_2, $_POST[$work_list_num]);
    }
    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($works , $work_2);
    }
    //3
    $job_title_num = 'job_title_' . '3';
    $employer_num = 'employer_' . '3';
    $work_city_num = 'work_city_' . '3';
    $work_state_num = 'work_state_' . '3';
    $start_date_num = 'start_date_' . '3';
    $end_date_num = 'end_date_' . '3';
    $work_current_num = 'work_current_' . '3';
    $work_list_num = 'work_list_' . '3';

    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($work_3, $_POST[$job_title_num]);
    }
    if (isset($_POST[$employer_num])) {
        array_push($work_3, $_POST[$employer_num]);
    }
    if (isset($_POST[$work_city_num])) {
        array_push($work_3, $_POST[$work_city_num]);
    }
    if (isset($_POST[$work_state_num])) {
        array_push($work_3, $_POST[$work_state_num]);
    }
    if (isset($_POST[$start_date_num])) {
        array_push($work_3, $_POST[$start_date_num]);
    }
    if (isset($_POST[$end_date_num]) && !empty($_POST[$end_date_num]) && !isset($_POST[$work_current_num])) {
        array_push($work_3, $_POST[$end_date_num]);
    } else {
        array_push($work_3, 'current');
    }
    if(isset($_POST[$work_list_num])) {
        array_push($work_3, $_POST[$work_list_num]);
    }
    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($works , $work_3);
    }
    //4
    $job_title_num = 'job_title_' . '4';
    $employer_num = 'employer_' . '4';
    $work_city_num = 'work_city_' . '4';
    $work_state_num = 'work_state_' . '4';
    $start_date_num = 'start_date_' . '4';
    $end_date_num = 'end_date_' . '4';
    $work_current_num = 'work_current_' . '4';
    $work_list_num = 'work_list_' . '4';

    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($work_4, $_POST[$job_title_num]);
    }
    if (isset($_POST[$employer_num])) {
        array_push($work_4, $_POST[$employer_num]);
    }
    if (isset($_POST[$work_city_num])) {
        array_push($work_4, $_POST[$work_city_num]);
    }
    if (isset($_POST[$work_state_num])) {
        array_push($work_4, $_POST[$work_state_num]);
    }
    if (isset($_POST[$start_date_num])) {
        array_push($work_4, $_POST[$start_date_num]);
    }
    if (isset($_POST[$end_date_num]) && !empty($_POST[$end_date_num]) && !isset($_POST[$work_current_num])) {
        array_push($work_4, $_POST[$end_date_num]);
    } else {
        array_push($work_4, 'current');
    }
    if(isset($_POST[$work_list_num])) {
        array_push($work_4, $_POST[$work_list_num]);
    }
    if (isset($_POST[$job_title_num]) && !empty($_POST[$job_title_num])) {
        array_push($works , $work_4);
    }
    
    /********************************** EDUCATION SECTION  ************************/
    $edus  = [];
    $edu_0 = [];
    $edu_1 = [];
    $edu_2 = [];
    $edu_3 = [];
    $edu_4 = [];
	
    //0   
    $university_num = 'education_university_' . '0';
    $location_num = 'education_university_location_' . '0';
    $degree_num = 'education_university_degree_' . '0';
    $edu_start_date_num = 'start_date_edu_' . '0';
    $edu_end_date_num = 'end_date_edu_' . '0';
    $edu_current_num = 'work_current_edu_' . '0';
    $edu_list_num = 'edu_list_' . '0';

    if (isset($_POST[$university_num])) {
        array_push($edu_0, $_POST[$university_num]);
    }
    if (isset($_POST[$location_num])) {
        array_push($edu_0, $_POST[$location_num]);
    }
    if (isset($_POST[$degree_num])) {
        array_push($edu_0, $_POST[$degree_num]);
    }
    if (isset($_POST[$edu_start_date_num])) {
        array_push($edu_0, $_POST[$edu_start_date_num]);
    }
    if (isset($_POST[$edu_end_date_num]) && !empty($_POST[$edu_end_date_num]) && !isset($_POST[$edu_current_num])) {
        array_push($edu_0, $_POST[$edu_end_date_num]);
    } else {
        array_push($edu_0, 'current');
    }
    if(isset($_POST[$edu_list_num])) {
        array_push($edu_0, $_POST[$edu_list_num]);
    }
    if (isset($_POST[$university_num]) && !empty($_POST[$university_num])) {
        array_push($edus , $edu_0);
    }
    //1   
    $university_num = 'education_university_' . '1';
    $location_num = 'education_university_location_' . '1';
    $degree_num = 'education_university_degree_' . '1';
    $edu_start_date_num = 'start_date_edu_' . '1';
    $edu_end_date_num = 'end_date_edu_' . '1';
    $edu_current_num = 'work_current_edu_' . '1';
    $edu_list_num = 'edu_list_' . '1';

    if (isset($_POST[$university_num])) {
        array_push($edu_1, $_POST[$university_num]);
    }
    if (isset($_POST[$location_num])) {
        array_push($edu_1, $_POST[$location_num]);
    }
    if (isset($_POST[$degree_num])) {
        array_push($edu_1, $_POST[$degree_num]);
    }
    if (isset($_POST[$edu_start_date_num])) {
        array_push($edu_1, $_POST[$edu_start_date_num]);
    }
    if (isset($_POST[$edu_end_date_num]) && !empty($_POST[$edu_end_date_num]) && !isset($_POST[$edu_current_num])) {
        array_push($edu_1, $_POST[$edu_end_date_num]);
    } else {
        array_push($edu_1, 'current');
    }
    if(isset($_POST[$edu_list_num])) {
        array_push($edu_1, $_POST[$edu_list_num]);
    }
    if (isset($_POST[$university_num]) && !empty($_POST[$university_num])) {
        array_push($edus , $edu_1);
    }
    //2   
    $university_num = 'education_university_' . '2';
    $location_num = 'education_university_location_' . '2';
    $degree_num = 'education_university_degree_' . '2';
    $edu_start_date_num = 'start_date_edu_' . '2';
    $edu_end_date_num = 'end_date_edu_' . '2';
    $edu_current_num = 'work_current_edu_' . '2';
    $edu_list_num = 'edu_list_' . '2';

    if (isset($_POST[$university_num])) {
        array_push($edu_2, $_POST[$university_num]);
    }
    if (isset($_POST[$location_num])) {
        array_push($edu_2, $_POST[$location_num]);
    }
    if (isset($_POST[$degree_num])) {
        array_push($edu_2, $_POST[$degree_num]);
    }
    if (isset($_POST[$edu_start_date_num])) {
        array_push($edu_2, $_POST[$edu_start_date_num]);
    }
    if (isset($_POST[$edu_end_date_num]) && !empty($_POST[$edu_end_date_num]) && !isset($_POST[$edu_current_num])) {
        array_push($edu_2, $_POST[$edu_end_date_num]);
    } else {
        array_push($edu_2, 'current');
    }
    if(isset($_POST[$edu_list_num])) {
        array_push($edu_2, $_POST[$edu_list_num]);
    }
    if (isset($_POST[$university_num]) && !empty($_POST[$university_num])) {
        array_push($edus , $edu_2);
    }
    //3   
    $university_num = 'education_university_' . '3';
    $location_num = 'education_university_location_' . '3';
    $degree_num = 'education_university_degree_' . '3';
    $edu_start_date_num = 'start_date_edu_' . '3';
    $edu_end_date_num = 'end_date_edu_' . '3';
    $edu_current_num = 'work_current_edu_' . '3';
    $edu_list_num = 'edu_list_' . '3';

    if (isset($_POST[$university_num])) {
        array_push($edu_3, $_POST[$university_num]);
    }
    if (isset($_POST[$location_num])) {
        array_push($edu_3, $_POST[$location_num]);
    }
    if (isset($_POST[$degree_num])) {
        array_push($edu_3, $_POST[$degree_num]);
    }
    if (isset($_POST[$edu_start_date_num])) {
        array_push($edu_3, $_POST[$edu_start_date_num]);
    }
    if (isset($_POST[$edu_end_date_num]) && !empty($_POST[$edu_end_date_num]) && !isset($_POST[$edu_current_num])) {
        array_push($edu_3, $_POST[$edu_end_date_num]);
    } else {
        array_push($edu_3, 'current');
    }
    if(isset($_POST[$edu_list_num])) {
        array_push($edu_3, $_POST[$edu_list_num]);
    }
    if (isset($_POST[$university_num]) && !empty($_POST[$university_num])) {
        array_push($edus , $edu_3);
    }
    //4   
    $university_num = 'education_university_' . '4';
    $location_num = 'education_university_location_' . '4';
    $degree_num = 'education_university_degree_' . '4';
    $edu_start_date_num = 'start_date_edu_' . '4';
    $edu_end_date_num = 'end_date_edu_' . '4';
    $edu_current_num = 'work_current_edu_' . '4';
    $edu_list_num = 'edu_list_' . '4';

    if (isset($_POST[$university_num])) {
        array_push($edu_4, $_POST[$university_num]);
    }
    if (isset($_POST[$location_num])) {
        array_push($edu_4, $_POST[$location_num]);
    }
    if (isset($_POST[$degree_num])) {
        array_push($edu_4, $_POST[$degree_num]);
    }
    if (isset($_POST[$edu_start_date_num])) {
        array_push($edu_4, $_POST[$edu_start_date_num]);
    }
    if (isset($_POST[$edu_end_date_num]) && !empty($_POST[$edu_end_date_num]) && !isset($_POST[$edu_current_num])) {
        array_push($edu_4, $_POST[$edu_end_date_num]);
    } else {
        array_push($edu_4, 'current');
    }
    if(isset($_POST[$edu_list_num])) {
        array_push($edu_4, $_POST[$edu_list_num]);
    }
    if (isset($_POST[$university_num]) && !empty($_POST[$university_num])) {
        array_push($edus , $edu_4);
    }

    $skills = [];
	for ($x=0; $x < 10 ;$x++) {
		$skill_num = 'skill_' . $x;
		if (isset($_POST[$skill_num])) {
			array_push($skills, $_POST[$skill_num]);
		}
    }

    /*********************************** CERTIFIFCATES **********************/  
    $certs  = [];
    $cert_0 = [];
    $cert_1 = [];
    $cert_2 = [];
    $cert_3 = [];
    $cert_4 = [];

    //0
    $date_cert_num = 'date_cert_' . '0';
    $name_cert_num = 'name_cert_' . '0';

    if (isset($_POST[$date_cert_num])) {
        array_push($cert_0, $_POST[$name_cert_num]);
    }
    if (isset($_POST[$name_cert_num])) {
        array_push($cert_0, $_POST[$date_cert_num]);
    }
    if (isset($_POST[$name_cert_num]) && !empty($_POST[$name_cert_num])) {
        array_push($certs , $cert_0);
    }
    //1
    $date_cert_num = 'date_cert_' . '1';
    $name_cert_num = 'name_cert_' . '1';

    if (isset($_POST[$date_cert_num])) {
        array_push($cert_1, $_POST[$name_cert_num]);
    }
    if (isset($_POST[$name_cert_num])) {
        array_push($cert_1, $_POST[$date_cert_num]);
    }
    if (isset($_POST[$name_cert_num]) && !empty($_POST[$name_cert_num])) {
        array_push($certs , $cert_1);
    }
    //2
    $date_cert_num = 'date_cert_' . '2';
    $name_cert_num = 'name_cert_' . '2';

    if (isset($_POST[$date_cert_num])) {
        array_push($cert_2, $_POST[$name_cert_num]);
    }
    if (isset($_POST[$name_cert_num])) {
        array_push($cert_2, $_POST[$date_cert_num]);
    }
    if (isset($_POST[$name_cert_num]) && !empty($_POST[$name_cert_num])) {
        array_push($certs , $cert_2);
    }
    //3
    $date_cert_num = 'date_cert_' . '3';
    $name_cert_num = 'name_cert_' . '3';

    if (isset($_POST[$date_cert_num])) {
        array_push($cert_3, $_POST[$name_cert_num]);
    }
    if (isset($_POST[$name_cert_num])) {
        array_push($cert_3, $_POST[$date_cert_num]);
    }
    if (isset($_POST[$name_cert_num]) && !empty($_POST[$name_cert_num])) {
        array_push($certs , $cert_3);
    }
    //4
    $date_cert_num = 'date_cert_' . '4';
    $name_cert_num = 'name_cert_' . '4';

    if (isset($_POST[$date_cert_num])) {
        array_push($cert_4, $_POST[$name_cert_num]);
    }
    if (isset($_POST[$name_cert_num])) {
        array_push($cert_4, $_POST[$date_cert_num]);
    }
    if (isset($_POST[$name_cert_num]) && !empty($_POST[$name_cert_num])) {
        array_push($certs , $cert_4);
    }
    /***************** SUMMARY ********************/
    $summary = filter_var($_POST['summary'], FILTER_SANITIZE_STRING);
    
    $_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['profession'] = $profession;
	$_SESSION['address'] = $address;
	$_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['LinkedIn'] = $LinkedIn;
    $_SESSION['Facebook'] = $Facebook;
    $_SESSION['Twitter'] = $Twitter;
    $_SESSION['Website'] = $Website;
    
    $_SESSION['work'] = $works;
    $_SESSION['edu'] = $edus;
    $_SESSION['skills'] = $skills;
    $_SESSION['summary'] = $summary;
    $_SESSION['certs'] = $certs;
    
?>
<?php
	include 'connect.php';
    sleep(4);
    
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $facebook = filter_var($_POST['facebook'], FILTER_SANITIZE_URL);
    
    $university = filter_var($_POST['university'], FILTER_SANITIZE_STRING);
    $faculty = filter_var($_POST['faculty'], FILTER_SANITIZE_STRING);
    $department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
    $ac_yr = filter_var($_POST['ac_yr'] , FILTER_SANITIZE_STRING);
    $university_email = filter_var($_POST['university_email'], FILTER_SANITIZE_EMAIL);
    
    $aiche_before = filter_var($_POST['aiche_before'] , FILTER_SANITIZE_STRING);
    $first_committee = filter_var($_POST['first_committee'] , FILTER_SANITIZE_STRING);
    $second_committee = filter_var($_POST['second_committee'] , FILTER_SANITIZE_STRING);
  
   
    /* test area */
    $lines = array_filter(explode("\n", trim($_POST['why_join'])));
    $text = implode(",", $lines);
    $why_join = filter_var($text, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
   
    
    /* test area */
    $lines = array_filter(explode("\n", trim($_POST['open_area'])));
    $text = implode(",", $lines);
    $open_area = filter_var($text, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
   
    $stmt = $con->prepare("INSERT INTO recruitment(
                                name, email, phone, city, facebook, university, faculty, department, ac_yr, university_email, aiche_before, first_committee, second_committee, why_join, open_area
                            ) VALUES(
                                :zname, :zemail, :zphone, :zcity, :zfacebook, :zuniversity, :zfaculty, :zdepartment, :zac_yr, :zuniversity_email, :zaiche_before, :zfirst_committee, :zsecond_committee, :zwhy_join, :zopen_area
                            )" );

    $stmt->execute(array(
        'zname' => $name,
        'zemail' => $email,
        'zphone' => $phone,
        'zcity' => $city,
        'zfacebook' => $facebook,
        'zuniversity' => $university,
        'zfaculty' => $faculty,
        'zdepartment' => $department,
        'zac_yr' => $ac_yr,
        'zuniversity_email' => $university_email,
        'zaiche_before' => $aiche_before,
        'zfirst_committee' => $first_committee,
        'zsecond_committee' => $second_committee,
        'zwhy_join' => $why_join,
        'zopen_area' => $open_area,
    ));
    $count = $stmt->rowCount();
    if ($count) {
        echo $count;
    } else {
        echo 0;
    }
    
	
?>    
   
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

   
    
    /* test area */
    $lines = array_filter(explode("\n", trim($_POST['open_area'])));
    $text = implode(",", $lines);
    $open_area = filter_var($text, FILTER_SANITIZE_STRING);
   
    $stmt = $con->prepare("INSERT INTO diploma(
                                name, email, phone, city, facebook, university, faculty, department, ac_yr, open_area
                            ) VALUES(
                                :zname, :zemail, :zphone, :zcity, :zfacebook, :zuniversity, :zfaculty, :zdepartment, :zac_yr,  :zopen_area
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
        'zopen_area' => $open_area,
    ));
    $count = $stmt->rowCount();
    if ($count) {
       echo $count;
    } else {
        echo 0;
    }
    
	
?>    
   
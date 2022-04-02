<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<?php if(isset($cvnumber) && !empty($cvnumber)){ ?>
	<link rel="stylesheet" type="text/css" href="assets/css/resumes/resume-style-<?php echo $cvnumber; ?>.css" />
	<?php } ?>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,100&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
	
</head>
<body>

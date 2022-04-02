<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" content="distillation">
	<title>Create Your CV now</title>

	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/container.css">

<link rel="shortcut icon" href="img/aiche.png" type="image/x-icon">
	
</head>
<body>

	   <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Insert your CV Information</h2>
                    <h2 class="title"></h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" >
                        <label>Full name</label>
                        <input type="text" name="fullname" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                        <label>Date of Birth</label>
                        <input type="text" name="Dateofbirth" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                        <label>Address</label>
                        <input type="text" name="address" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>Phone</label>
                       <input type="tel" name="phone" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>E-mail</label>
                       <input type="email" name="email" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />
 
                       <label>LinkedIn</label>
                       <input type="url" name="linkedin" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label style=" font-size: 28px; font-weight:bold;">Education</label><br />
                       <label>Year of Graduation</label>
                       <input type="text" name="YearofGraduation" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>Faculty, Departement - University</label>
                       <input type="text" name="Faculty" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>Volunteering Experience </label>
                       <input type="text" name="Volunteering" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label style=" font-size: 28px; font-weight:bold;">Courses</label> <br />
                       <label>Technical</label>
                       <input type="text" name="Technical" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>Non-Technical</label>
                       <input type="text" name="nonTechnical" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label style=" font-size: 28px; font-weight:bold;">Internships</label> <br />
                       <label>Winter Training</label>
                       <input type="text" name="WinterTraining" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>Summer Training</label>
                       <input type="text" name="SummerTraining" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label style=" font-size: 28px; font-weight:bold;">Skills</label><br />
                       <label>Personal Skills</label>
                       <input type="text" name="PersonalSkills" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>Computer Skills</label>
                       <input type="text" name="ComputerSkills" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <label>languages</label>
                       <input type="text" name="languages" id="name" required="required" placeholder="Please Enter Your Name"/><br /><br />

                       <input type="submit" value=" Submit " name="submit"/><br />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
	<!-- ====================================== START FOOTER ======================================== -->
	<footer>
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

	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>



 <?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='aichuoov';
$password='Aicheuser123'; 

try {
$dbh = new PDO("mysql:host=$hostname;dbname=aichuoov_aiche" ,
                          $username,$password  );

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO profile(fullname, Dateofbirth, address, phone, email, linkedin, YearofGraduation, Faculty, Volunteering, Technical,
nonTechnical, WinterTraining, SummerTraining, PersonalSkills, ComputerSkills, languages)

VALUES ('

".$_POST["fullname"]."',
'".$_POST["Dateofbirth"]."',
'".$_POST["address"]."',
'".$_POST["phone"]."',
'".$_POST["email"]."',
'".$_POST["linkedin"]."',
'".$_POST["YearofGraduation"]."',
'".$_POST["Faculty"]."',
'".$_POST["Volunteering"]."',
'".$_POST["Technical"]."',
'".$_POST["nonTechnical"]."',
'".$_POST["WinterTraining"]."',
'".$_POST["SummerTraining"]."',
'".$_POST["PersonalSkills"]."',
'".$_POST["ComputerSkills"]."',
'".$_POST["languages"]."')";

if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>
alert('Your information is recorded AIChE Suez wish you a lucky chance');
window.location.replace('http://aichesusc.org/aiche-blog-home-page/');
</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Please, Enter your information again');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}
}
?>

   
    
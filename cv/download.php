<?php
	session_start();
    $cvnumber = $_GET['temp'];
    
	include 'includes/templates/header.php';
 
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
	$profession = $_SESSION['profession'];
	$address = $_SESSION['address'];
	$phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $LinkedIn = $_SESSION['LinkedIn'];
    $Facebook = $_SESSION['Facebook'];
    $Twitter = $_SESSION['Twitter'];
    $Website = $_SESSION['Website'];
    $works = $_SESSION['work'];
    $edus = $_SESSION['edu'];
    $skills = $_SESSION['skills'];
    $certs = $_SESSION['certs'];
    $summary = $_SESSION['summary'];
 ?>   
    
    
    <div class="container" style="margin-top:30px;margin-bottom:30px;">
        <div class="row">
            <div class="col-md-offset-2 col-md-8" style="padding-left:0px;padding-right:0px">
                <div class="CV">
	                <div class="resume col-xs-12" id="resume" style="padding-right:0px;padding-left:0px;">
                <?php
                    if($_GET['temp'] == 1) {
                        include 'resumes/resume_1.php';
                    } elseif ($_GET['temp'] == 2) {
                        include 'resumes/resume_2.php';
                    } elseif ($_GET['temp'] == 3) {
                        include 'resumes/resume_3.php';
                    } elseif ($_GET['temp'] == 4) {
                        include 'resumes/resume_4.php';
                    }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="footer-cv">
                <div class="edit_footer">
                    <a href="resume.php?temp=<?php echo $cvnumber ?>"><button>EDIT</button></a>
                    <a href="index.php?temp=<?php echo $cvnumber ?>#select_temp">Change Template</a>
                </div>
                <button type="button" id="downloadResume">Download</button>
    
            </div>
        </div>
    </div>
                
    

    
    
<?php
	include 'includes/templates/footer.php';
?>
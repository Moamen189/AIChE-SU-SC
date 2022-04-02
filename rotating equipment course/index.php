<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotating Equipment Course</title>
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container bg">

      <section class="header">
        <div class="tittle-of-course">
          <h1>Rotating equipment course</h1>
        </div>
      </section>


          <div class="container">

        <section class="row ">
          <section class="col-sm-1 col-md-2 col-lg-3"></section>
            <section class="form-container col-sm-10 col-md-8 col-lg-6">
                    <form method="post">
                        <div class="row">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                <input type="text" name="studentname" class="form-control" placeholder="Enter your full name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Phone</span>
                                  </div>
                                  <input type="text" name="phone" class="form-control" placeholder="Enter your phone" aria-label="Username" aria-describedby="basic-addon1">
                              </div>

                              <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                
                                <div class="input-group-append">
                                  <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Faculty</span>
                                  </div>
                                  <input type="text" name="faculty" class="form-control" placeholder="Enter your faculty" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                               <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Department</span>
                                  </div>
                                  <input type="text" name="department" class="form-control" placeholder="Enter your department" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Year</span>
                                  </div>
                                  <input type="text" name="yr" class="form-control" placeholder="Enter your year" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                              <div class="col-3"></div>
                              <div class="col-6">
                                <button type="submit" name="submit" class="btn btn-outline-dark btn-block">Submit</button>
                              </div>
                              <div class="col-3"></div>

                            
                        </div>
                    </form>
            </section>
            <section class="col-sm-1 col-md-2 col-lg-3"></section>

        </section>

    </section>

            </div>












    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
$sql = "INSERT INTO rotating_equipment_course(studentname,phone,email,faculty,department,yr)

VALUES ('

".$_POST["studentname"]."',
'".$_POST["phone"]."',
'".$_POST["email"]."',
'".$_POST["faculty"]."',
'".$_POST["department"]."',
'".$_POST["yr"]."')";

if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
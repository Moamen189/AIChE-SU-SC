<?php
	$pagetitle = 'home';
	include 'includes/functions/functions.php';
	include 'includes/templates/header.php';
	include 'config/config.php';
	session_start();
	if (isset($_SESSION['Username'])){
    	header('Location: dashboard.php'); //redirect dashboard page
    	 
	}
    if ($_SERVER['REQUEST_METHOD']  == 'POST'){
    	$username = $_POST['user'];
    	$password = $_POST['pass'];

     //check if the user exist in database
    	$stmt = $con->prepare("SELECT  
    								id ,username , password 
    						   FROM
    						   	   	admin	
    						   WHERE 
							   		username = ? 
    						   AND 
							   		password = ? 
    						   LIMIT 1" );

    	$stmt->execute(array($username,$password));
    	$row = $stmt->fetch(); 
    	$count = $stmt->rowCount();
    	 

     //If count > 0 this mean the database contain record about ti=his username
    	if ($count > 0){
    		$_SESSION['Username'] = $username;  //register session form
    		$_SESSION['ID'] = $row['UserID'];   //register session id
    		header('Location: dashboard.php');  //redirect to dashboard page
    		exit(); 
    	}
    }
?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" class="form-control">
		<h4>ADMIN LOGIN</h4>
		<input type="text" name="user" class="form-control" placeholder="Username" autocomplete="off" />
		<input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="new-password"/>
		<input type="submit" name="submit" class="btn btn-primary btn-block" value="login" />


	
<?php
	include 'includes/templates/footer.php';
?>
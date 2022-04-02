<?php
	/* tilte function that echo the page title in case the page 
	has the variable $pagetitle and echo default for others.*/

	function gettitle() {
		global $pagetitle;
		if (isset($pagetitle)){
			echo $pagetitle;
		}else {
			echo "default";
		}
	}

	/*
	** home redirect function
	**$errormsg
	**$seconds
	*/
	function redirectHome($theMsg,$url = null,$seconds = 3){
		if($url === null){
			$url = 'index.php';
            $link = 'Home page';
		}else{
           if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){
           	$url = $_SERVER['HTTP_REFERER'];
           	$link = 'previous page';
           } else {
           	$url='index.php'; 
           	$link = 'Home page';
           } 
		}
		echo $theMsg;
		echo"<div class='alert alert-info '>you will be redirected to $link after <span class='countdown'> $seconds </span> Seconds</div>";
		header("refresh:$seconds;url=$url");
		exit();
	}
  /*
  **check Items functions
  **
  **
  */
  function checkItem($select,$form,$value) {
  	global $con;
  	$statement = $con->prepare("SELECT $select FROM $form WHERE $select =?");
  	$statement->execute(array($value));
    $count = $statement->fetchAll();    
  	return count($count);
  }
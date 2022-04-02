<?php
	$dsn = 'mysql:host=localhost;dbname=aiche_test';
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array

		);
	try {
        $con = new PDO($dsn,$user,$pass,$option);
    }
	catch(PDOException $e){
		echo'failed' . $e->getmessage();
	}	
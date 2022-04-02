<?php
	$mysql_host = 'localhost';
	$mysql_db_name = 'aiche_cv';
	$user = 'root';
	$pass = '';

	$dsn = 'mysql:host=';
	$dsn .= $mysql_host;
	$dsn .= ';dbname=';
	$dsn .= $mysql_db_name; 

	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);
	try {
		$con = new PDO($dsn,$user,$pass,$option);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo'failed' . $e->getmessage();
	}	
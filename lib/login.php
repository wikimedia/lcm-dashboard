<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "root";

	$databaseName = "lcmdashboard";

	$tableName = "langdetail";

	$con = mysql_connect($host,$user,$pass);
	$dbs = mysql_select_db($databaseName, $con);

	$uname = $_POST['username'];
	$pass = $_POST['password'];
	//$uname = 'admind';
	//$pass = 'lcmdadmin';

	$query = "SELECT * from admin where username='$uname' and password='$pass'";

	$result = mysql_query($query);
  	//echo mysql_fetch_assoc($result);
	if (mysql_fetch_assoc($result)) {
		$_SESSION['username'] = 1; 
  		//echo $_SESSION['username'];
	}
	else{
  		//echo $_SESSION['username'];
	}

	header('Location: ../index.php');

?>
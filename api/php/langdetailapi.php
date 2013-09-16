<?php
	include '../../lib/dbconnect.php';
	header("access-control-allow-origin: *");
	$tableName = 'langdetail';

	$con = mysql_connect($host,$user,$pass);
	mysql_set_charset('utf8',$con);
	$dbs = mysql_select_db($databaseName,$con);
	mysql_query("SET NAMES 'utf8'", $con);

	$var = $_GET['query'];

	if ($var != null) {
		$result = mysql_query("SELECT * FROM $tableName where langname_eng = '$var'",$con); 
	}
	else{
		$result = mysql_query("SELECT * FROM $tableName", $con);
	}

	$i = 0;

	while ($result1 = mysql_fetch_assoc($result)) {
		$array[] = $result1;
	}

	$json = json_encode($array);
	#echo $json;
	echo isset($_GET['callback']) ? "{$_GET['callback']}($json)" : $json;
?>
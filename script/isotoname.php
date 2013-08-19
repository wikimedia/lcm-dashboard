<?php
	include '../lib/dbconnect.php';
	$tableName = 'langdetail';
	$con = mysql_connect($host,$user,$pass);
	mysql_set_charset('utf8',$con);
	$dbs = mysql_select_db($databaseName,$con);
	mysql_query("SET NAMES 'utf8'", $con);

	$query = 'select langname_eng, langcode_iso from langdetail';
	$result = mysql_query($query,$con);

	while ($result1 = mysql_fetch_assoc($result)) {
		$array[$result1['langcode_iso']] = $result1['langname_eng'];
	}

	$jsondata = json_encode($array);
	$file=fopen("../data/isotoname.json","w");
	fwrite($file, $jsondata);
	fclose($file);
	//echo 'file created successfully';
?>
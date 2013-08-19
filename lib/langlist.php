<?php
	include 'dbconnect.php';

	$tableName = 'langdetail';

	$con = mysql_connect($host,$user,$pass);
	mysql_set_charset('utf8',$con);
	$dbs = mysql_select_db($databaseName,$con);
	mysql_query("SET NAMES 'utf8'", $con);
	$query = 'select * from langdetail';

	$result = mysql_query($query,$con);

	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		#$array[] = array_map('utf8_encode',$result1);
		$array[$i][] = $result1['langcode_wmf'];
		$array[$i][] = $result1['langcode_iso'];
		$array[$i][] = utf8_decode( utf8_encode($result1['langname_autonym']));
		$array[$i][] = $result1['langname_eng'];
		$i = $i + 1;
	}
	
	echo json_encode($array);

?>
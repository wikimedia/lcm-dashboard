<?php
	include '../../lib/dbconnect.php';
	header("access-control-allow-origin: *");
	$tableName = 'langdetail';

	$con = mysql_connect($host,$user,$pass);
	mysql_set_charset('utf8',$con);
	$dbs = mysql_select_db($databaseName,$con);
	mysql_query("SET NAMES 'utf8'", $con);

	$var = $_GET['query'];

	$vars = explode(' ', $var);
	
	$and = ' and ';	
	$string = null;
	$j = 0;
	for ($i=0; $i < count($vars); $i++) { 
		
		if (strlen($vars[0]) < 2){
			$j = 1;
			continue;
		}
		if($i == $j)
			$string = $string . $vars[$i]. '=1';
		else
			$string = $string. $and . $vars[$i]. '=1';
	}

	$query = 'select * from langdetail';
	
	if(count($vars) > 0 && strlen($var) > 2)
		$query = 'select * from langdetail where '.$string;
	
	$result = mysql_query($query,$con);

	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$array[$i][] = $result1['langcode_wmf'];
		$array[$i][] = $result1['langcode_iso'];
		$array[$i][] = utf8_decode( utf8_encode($result1['langname_autonym']));
		$array[$i][] = $result1['langname_eng'];
		$i = $i + 1;
	}
	
	$json = json_encode($array);
	echo isset($_GET['callback']) ? "{$_GET['callback']}($json)" : $json;
?>
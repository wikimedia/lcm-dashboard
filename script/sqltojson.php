<?php
	include '../lib/dbconnect.php';
	$tableName = 'langdetail';
	$con = mysql_connect($host,$user,$pass);
	mysql_set_charset('utf8',$con);
	$dbs = mysql_select_db($databaseName,$con);
	mysql_query("SET NAMES 'utf8'", $con);

	$query = 'select * from langdetail';
	$result = mysql_query($query,$con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		//$array[$result1['langname_eng']] =  utf8_decode( utf8_encode($result1['langname_autonym']));
		#$array[] = $result1['langname_eng'] . ' - ' .utf8_decode( utf8_encode($result1['langname_autonym']));
		// $array[$i]['autonym'] = utf8_decode( utf8_encode($result1['langname_autonym']));
		// $array[$i]['name'] = $result1['langname_eng'];
		// $array[$i]['value'] = $result1['langname_eng'];
		// $array[$i]['iso'] = $result1['langcode_iso'];
		// $array[$i]['tokens'][] = $result1['langname_eng'];
		// $array[$i]['tokens'][] = $result1['langcode_iso'];
		// $array[$i]['tokens'][] = utf8_decode( utf8_encode($result1['langname_autonym']));
		$array[$result1['langcode_iso']] = $result1;
		$array1[$result1['langcode_wmf']] = $result1;
		//$i = $i + 1;
	}

	$jsondata = json_encode($array);
	$file=fopen("../data/langdatadump_iso.json","w");
	fwrite($file, $jsondata);
	fclose($file);

	$jsondata = json_encode($array1);
	$file=fopen("../data/langdatadump_wmf.json","w");
	fwrite($file, $jsondata);
	fclose($file);
	//echo 'file created successfully';
?>
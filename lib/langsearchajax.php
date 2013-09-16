<?php 

	include 'dbconnect.php';
	$tableName = "langdetail";

	$con = mysql_connect($host,$user,$pass);
	$dbs = mysql_select_db($databaseName, $con);  

	mysql_set_charset("utf8", $con);

	$query = $_POST['query'];

	$result = mysql_query("SELECT * FROM $tableName where langname_eng = '$query'",$con);          //query
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$array[] = $result1['langcode_iso'];
		$array[] = $result1['langcode_wmf'];
		$array[] = $result1['langname_eng'];
		$array[] = utf8_decode( utf8_encode($result1['langname_autonym']));
		$array[] = $result1['langname_html'];
		$array[] = $result1['macro_lang'];
		$array[] = $result1['wmf_proj_status'];
		$array[] = $result1['fallback_code'];
		$array[] = $result1['narayam'];
		$array[] = $result1['jquery_ime'];
		$array[] = $result1['webfonts'];
		$array[] = $result1['jquery_webfonts'];
		$array[] = $result1['i18n_mw_core'];
		$array[] = $result1['jquery_i18n'];
		$array[] = $result1['jquery_uls'];
		$array[] = $result1['translate'];
		$array[] = $result1['dictionary'];
		$array[] = $result1['spellchecker'];
		$array[] = $result1['glossary'];
		$array[] = $result1['f_or_i'];
	}

	echo json_encode($array);
?>
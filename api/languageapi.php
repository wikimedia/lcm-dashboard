<?php
	include '../lib/dbconnect.php';
	require_once 'rss_php.php';   
	header("access-control-allow-origin: *");
	$tableName = 'langdetail';

	$con = mysql_connect($host,$user,$pass);
	mysql_set_charset('utf8',$con);
	$dbs = mysql_select_db($databaseName,$con);
	mysql_query("SET NAMES 'utf8'", $con);

	$query = $_GET['query'];
	$tool = $_GET['tool'];
	$language = $_GET['language'];
	$format = $_GET['format'];

	if ($query == 'language'){
		if ($language != 'all') {
			$result = mysql_query("SELECT * FROM $tableName where langname_eng = '$language'",$con); 
		}
		else{
			$result = mysql_query("SELECT * FROM $tableName", $con);
		}

		while ($result1 = mysql_fetch_assoc($result)) {
			$array[] = $result1;
		
		}
	}
	else {
		$vars = explode('|', $tool);
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
	
		if(count($vars) > 0 && strlen($tool) > 2)
		$query = 'select * from langdetail where '.$string;
		$result = mysql_query($query,$con);	
		$array = 0;
		while ($result1 = mysql_fetch_assoc($result)) {
			$array = $array + 1;
		}

		#echo $array;
	}



/*
	$xml = new SimpleXMLElement('<root/>');
	array_walk_recursive($array1, array ($xml, 'addChild'));

	echo $xml->asXML();
*/

	switch ($format) {
		case 'json':
			$json = json_encode($array);
			//var_dump($json);
			echo isset($_GET['callback']) ? "{$_GET['callback']}($json)" : $json;
			break;

		case 'xml':
		/*
			$xml = new SimpleXMLElement('<root/>');
			array_walk_recursive(array_flip($array), array ($xml, 'addChild'));
			print $xml->asXML();
		*/
			$RSS_PHP = new rss_php;
			$RSS_PHP->loadArray($array, 'language');
			echo $RSS_PHP->getXML(); 
			break;

		case 'dump':
			var_dump($array);
			break;
		
		default:
			$json = json_encode($array);
			echo isset($_GET['callback']) ? "{$_GET['callback']}($json)" : $json;
			break;
	}
	#echo isset($_GET['callback']) ? "{$_GET['callback']}($json)" : $json;
?>
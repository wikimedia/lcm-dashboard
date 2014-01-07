<?php 
  include 'dbconnect.php';

  $tableName = "langdetail";

  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  $query = $_POST['query'];

  $result = mysql_query("SELECT langname_eng FROM $tableName where langname_eng like '{$query}%'");          //query
  $i = 0;
  while ($result1 = mysql_fetch_assoc($result)) {
    $array[] = $result1['langname_eng'];
  }

  echo json_encode($array) ;

?>

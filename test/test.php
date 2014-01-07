<?php 
  $host = "localhost";
  $user = "root";
  $pass = "root";

  $databaseName = "lcmdashboard";
  $tableName = "langdetail";

  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  $query = $_GET['q'];

  $result = mysql_query("SELECT langname_eng FROM $tableName where langname_eng like '{$query}%'");          //query
  $i = 0;
  while ($result1 = mysql_fetch_assoc($result)) {
    # code...
    $array[] = $result1['langname_eng'];
  }

  echo json_encode($array) ;

?>

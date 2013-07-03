<?php 

  header( 'Content-Type: text/html; charset=utf-8' );

  $host = "localhost";
  $user = "root";
  $pass = "root";

  $databaseName = "lcmdashboard";
  $tableName = "langdetail";

  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
  
  mysql_set_charset("UTF8", $con);
  //echo mysql_client_encoding($con);

  $query = $_POST['query'];

  $result = mysql_query("SELECT * FROM $tableName where langname_eng = '$query'");          //query
  $i = 0;
  while ($result1 = mysql_fetch_assoc($result)) {
    # code...
    
   //$array[] = array_map('utf8_encode',$result1);
    //$array = $_POST['query'];
    //$result1[] =  array_map('utf8_encode',$result2);
    
    
    //var_dump($array);
    
    //echo($result1[0])
    
    
    
    $array[] = $result1['langcode_iso'];
    $array[] = $result1['langcode_wmf'];
    $array[] = $result1['langname_eng'];
    $array[] = utf8_encode($result1['langname_autonym']);
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

  echo json_encode($array) ;

?>
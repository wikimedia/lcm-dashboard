<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="content-type" content="text-html; charset=utf-8">	
	<meta charset="utf-8">
	<meta name="author" content="Harsh Kothari">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-switch.css">
	<link rel="stylesheet" type="text/css" href="../css/boxed.css">
	<link rel="stylesheet" type="text/css" href="../jquery.ime/css/jquery.ime.css"/>
	<link rel="stylesheet" type="text/css" href="../css/example.css">
	
	<script type="text/javascript" src="js/hogan.js"></script>
	<script type="text/javascript" src="../js/jquery-1.10.2-min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-switch.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.selector.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.preferences.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.inputmethods.js"></script>
	<script type="text/javascript" src="js/typeahead.js"></script>
	<script type="text/javascript" src='js/langsearch.js'></script>

</head>
<body>
	<?php
		if(isset($_SESSION['username'])){
			include 'withlogin.php';
		}
		else{
			include 'withoutlogin.php';
		}
	?>
</body>
</html>
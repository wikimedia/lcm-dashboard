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

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css">
	<link rel="stylesheet" type="text/css" href="css/boxed.css">
	<link rel="stylesheet" type="text/css" href="jquery.ime/css/jquery.ime.css"/>
	<link rel="stylesheet" type="text/css" href="css/example.css">

	<script type="text/javascript" src="js/hogan.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2-min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-switch.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.selector.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.preferences.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.inputmethods.js"></script>
	<script type="text/javascript" src="js/typeahead.js"></script>
	<script type="text/javascript" src='js/langsearch.js'></script>

</head>
<body>
	<!-- Menu -->
	<?php
		if(isset($_SESSION['username'])){
			include "lib/header-wrap-with-login.php";
		}
		else{
			include "lib/header-wrap-without-login.php";
		}
	?>
	<!-- Menu over -->
	
	<!-- Alert show -->
	<div class="container-fluid">
		<div class="row-fluid">
			<div class='' align='center' id='alertshow'></div>
		</div>
	</div>

	<!-- Language detail show -->
	<?php
		if (isset($_SESSION['username'])) {
			require 'lib/langdetailadmin.php';
		}
		else{
			require 'lib/langdetail.php';
		}
	?>

	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Temp</h3>
		</div>
		<div class="modal-body">
			<p id="oldname" align="center"></p>
			<legend></legend>
			<p id="newvalue" align="center"></p>
			<p align='center'><input type="text" class="input-large"
				id="changeval" name="changeval" align='center'/></p>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary" id="save">Save changes</button>
		</div>
	</div>

	<script type="text/javascript">
		var a =  location.href;
		var q = a.split('?');
		console.log(q[1]);
		$(function(){
			//hideDataAnimation();
			languageDetail( q[1] );
		})
	</script>
</body>
</html>


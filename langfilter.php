<?php
	session_start();
	include 'lib/dbconnect.php';
	$tableName = "langdetail";

	$con = mysql_connect($host,$user,$pass);
	$dbs = mysql_select_db($databaseName, $con);  

	mysql_set_charset("utf8", $con);

	$query = $_POST['query'];

	//for featured and incubator languages
	$result = mysql_query("SELECT * FROM $tableName where f_or_i='1'",$con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$feature = $i;

	//for webfonts
	$result = mysql_query("SELECT * FROM $tableName where jquery_webfonts='1'",$con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$webfonts = $i;

	//For input methods
	$result = mysql_query("SELECT * FROM $tableName where jquery_ime='1'",$con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$ime = $i;
	//echo json_encode($array);
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
	<link rel="stylesheet" type="text/css" href="css/menusearch.css">

	
	<script type="text/javascript" src="js/hogan.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2-min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-switch.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.selector.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.preferences.js"></script>
	<script type="text/javascript" src="jquery.ime/src/jquery.ime.inputmethods.js"></script>
	<script type="text/javascript" src="js/typeahead.js"></script>
	<script type="text/javascript" src="js/langlist.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>

</head>

<body>
	<?php
		if(isset($_SESSION['username'])){
			include "lib/header-wrap-with-login.php";
		}
		else{
			include "lib/header-wrap-without-login.php";
		}
	?>

	<div class='well'>
		<div class='row-fluid'>
			<div class='span4' id=''>
				Line visualization
			</div>
		</div>
	</div>
<div class="container-fluid">
	<div class='row-fluid'>


		<div class='alert span3 alert-success ' id="filterLabel" align='center' style='display:none'>
			Active Filters
		</div>

		<div class='span9' id="filtershow">

		</div>
</div>
</div>
	<div class='container-fluid'>
	<div class='row-fluid'>
	<div class='span3'>
		<div class="accordion span12" id="accordion2">

					<!-- Heading 1 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#uls">
								Universal Language Selector
							</a>
						</div>
						<div id="uls" class="accordion-body collapse">
							<div class="accordion-inner">						
								<label class="checkbox inline">
									<input type="checkbox" id="webfonts" value="webfonts"> webfonts
								</label>
							</div>

							<div class="accordion-inner">
								<label class="checkbox inline">
									<input type="checkbox" id="jquery_ime" value="jquery_ime"> Input Methods
								</label>
							</div>

							<div class="accordion-inner">
								<label class="checkbox inline">
									<input type="checkbox" id="jquery_uls" value="jquery_uls"> Internationalization Support
								</label>
							</div>
						</div>
					</div>
		

					<!-- Heading 2 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#milkshake">
								Project Milkshake
							</a>
						</div>
						<div id="milkshake" class="accordion-body collapse">
							<div class="accordion-inner">						
								<label class="checkbox inline">
									<input type="checkbox" id="jquery_ime" value="jquery_ime"> Input Method Library
								</label>
							</div>

							<div class="accordion-inner">
								<label class="checkbox inline">
									<input type="checkbox" id="jquery_webfonts" value="jquery_webfonts"> Webfont Library
								</label>
							</div>

							<div class="accordion-inner">
								<label class="checkbox inline">
									<input type="checkbox" id="jquery_i18n" value="jquery_i18n"> i18n Library
								</label>
							</div>

							<div class="accordion-inner">
								<label class="checkbox inline">
									<input type="checkbox" id="jquery_uls" value="jquery_uls"> ULS Library
								</label>
							</div>
						</div>
					</div>

					<!-- Heading 3 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#legacy">
								Legacy Extension
							</a>
						</div>
						<div id="legacy" class="accordion-body collapse">
							<div class="accordion-inner">						
								<label class="checkbox inline">
									<input type="checkbox" id="narayam" value="narayam"> Narayam
								</label>
							</div>

							<div class="accordion-inner">
								<label class="checkbox inline">
									<input type="checkbox" id="webfonts" value="webfonts"> Webfonts
								</label>
							</div>
						</div>
					</div>


				</div>
		</div>

	<div class='span6' id=''>
		<div id="loader" align="center">
			<img src="img/ajax-loader.gif" align="center">
		</div>
		<div class="row-fluid" id="data">
			<table class='table table-striped table-bordered' id='langlist'>
			</table>
		</div>
	</div>

	<div class="span3 ">
		<div class=" well" id='langcount'>
			
		</div>
		<div class=" well">
			PIE visualization
		</div>
		<div class=" well">
			<div>
				Languages with projects
				<?php echo $feature ?>
			</div>
			<div>
				Languages in incubator 
			</div>
			<div>
				Languages with webfonts
				<?php echo $webfonts ?>
			</div>
			<div>
				Languages with Input Methods
				<?php echo $ime ?>
			</div>	
		</div>
	</div>
	</div>
</div>
<!--
	<script type="text/javascript">
	$(function(){
		$('td').click(function(){
			$this = $(this);
			var lang = $this.children().children(".span8").children(".text-info").text();
			console.log(lang);
			window.location.href = 'language.php?'+lang;
		})
		})
	</script>
-->
</body>
</html>
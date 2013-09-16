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
	<script type="text/javascript" src='js/langsearch.js'></script>

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

	<div class="hero-unit">
		<h1>LCM - Dashboard</h1>
		<p>The Language Coverage Matrix dashboard would help automate the information about language support provided by the Language Engineering team</p>
		<p>
			<a class="btn btn-primary btn-large">
				Learn more
			</a>
		</p>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8" align='justify'>
				The Language Coverage Matrix dashboard would help automate the information about language support provided by the Language Engineering team for e.g. key maps, web fonts, translation, language selector, i18n support for gender, plurals, grammar rules. The LCM would display this information as well as provide visualization graphs of language coverage using various search criteria such as tools or languages. I will build this web based dashboard using Javascript libraries integrated with MySQL to manage the data. I found this project very useful for language engineering team since wikipedia supports more than 300 languages. This tool will help them analyse the details of various available features of individual language. The Language Engineering team can efficiently prioritize and include some missing features , that is the features which are not currently available particular language. The overall impact of this project will lead to an efficient and enhanced user experience for Wikis.
			</div>
			<div class="span4">
				<h4> Latest Update </h4>
				Latest news feed
			</div>
		</div>
	</div>
</body>
</html>
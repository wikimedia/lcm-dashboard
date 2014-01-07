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
	
	<script type="text/javascript" src="../js/hogan.js"></script>
	<script type="text/javascript" src="../js/jquery-1.10.2-min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-switch.js"></script>
	<script type="text/javascript" src="../jquery.ime/src/jquery.ime.js"></script>
	<script type="text/javascript" src="../jquery.ime/src/jquery.ime.selector.js"></script>
	<script type="text/javascript" src="../jquery.ime/src/jquery.ime.preferences.js"></script>
	<script type="text/javascript" src="../jquery.ime/src/jquery.ime.inputmethods.js"></script>
	<script type="text/javascript" src="../js/typeahead.js"></script>
	<script type="text/javascript" src='../js/langsearch.js'></script>
	<script type="text/javascript" src="api.js"></script>

</head>

<body>

	<div class="navbar navbar-static-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="index.php">LCM - Dashboard</a>
			
			<div class="nav-collapse collapse">	
				<ul class="nav pull-right">
					<li><a href="../index.php">Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">About Project<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="https://github.com/wikimedia/lcm-dashboard/blob/master/README.md" target="_blank">Information</a></li>
							<li><a href="https://github.com/wikimedia/lcm-dashboard/blob/gsoc2013/GPL-LICENSE" target="_blank">License</a></li>
							<li><a href="https://github.com/wikimedia/lcm-dashboard/tree/gsoc2013" target="_blank">Project Source</a></li>
						</ul>
					</li>
					<li><a href="https://github.com/wikimedia/lcm-dashboard/issues" target="_blank">Feedback</a></li>
					<li><a href="index.php">API</a></li>
					<!--
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Admin<strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
						<form action="lib/login.php" method="post" accept-charset="UTF-8">
							<input id="username" class="input-large" type="text" name="username" autocomplete="off" placeholder="Username"/>
							<input id="password" class="input-large" type="password" name="password" placeholder="Password"/>
							<input id="remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="remember_me" value="1" />
							<label class="string optional" for="remember_me"> Remember me</label>
							<input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
						</form>
						</div>
          			</li>
          			-->
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.typeahead').on('typeahead:selected', function (e, datum) {
		if ($('.typeahead').parent().parent().attr('id') == 'noanimate') {

		}
		else {
			hideDataAnimation();	
		}
		//alert(datum.name);
		//window.location.href = 
		window.location.href = 'language.php?'+datum.name;
		//console.log(datum.name);
		//$('.typeahead').val(datum.name + ' - ' + datum.autonym + ' - ' + datum.iso);
	});
</script>

	<div class="container-fluid hero-unit">
		<h1>Language API Console</h1>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
		<div class="span3">
		<label>Format</label>
		<select id="format">
			<option>Select Format</option>
			<option>json</option>
			<option>dump</option>
		</select>
	</div>

	<div class="span3">
		<label>Query</label>
		<select id="query">
			<option>Select Query</option>
			<option>language</option>
			<option>tool</option>
		</select>
	</div>
	
	<div class="span3" id="parameter">
		<div id="tool">
			<label>Tools</label>
			<select multiple="multiple" id="tools">
				<option>jquery_ime</option>
				<option>jquery_uls</option>
				<option>jquery_i18n</option>
				<option>ULS Webfonts</option>
				<option>narayam</option>
				<option>webfonts</option>
				<option>translate</option>
				<option>dictionary</option>
				<option>spellChecker</option>
				<option>glossary</option>
			</select>
		</div>

		<div id="language">
			<label>Language</label>
			<select id="languages">
			</select>
		</div>
	</div>

	<div class="span3">
		<a class="btn btn-primary btn-block btn-large" id="req_button" href='#'>Request</a>
	</div>
	</div>
	</div>

	<div class="container-fluid">
		<h1>Query Formation</h1>
		<pre id="query_preview">
		</pre>
	</div>

	<div class="container-fluid">
		<h1>Query Result</h1>
		<pre id="result_preview">
			
		</pre>
	</div>

	<div class="container-fluid">
		<h1>Example</h1>
		<pre id="example">

		</pre>
	</div>
</body>
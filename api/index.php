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
			<option>xml</option>
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
				<option>jquery.ime</option>
				<option>jquery.uls</option>
				<option>jquery.i18n</option>
				<option>ULS Webfonts</option>
				<option>Narayam</option>
				<option>Webfonts</option>
				<option>Translate</option>
				<option>Dictionary</option>
				<option>SpellChecker</option>
				<option>Glossary</option>
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
</body>
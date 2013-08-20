<?php
	session_start();
	if (isset($_SESSION['username'])) {
		
	}
	else {
		header('Location: index.php');
	}
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

	<!-- Heading -->
	<div class="hero-unit " align='center' id="title">
		<h1>Language Search</h1>
		<p>Here you can search a language for all the details or Create a new Entry</p>
	</div>
	<!-- Heading over -->

	<div class="container-fluid" style="padding-top:30px;" id='boxbutton'>
		<div class="row-fluid">
			<div class="span4"></div>

			<div class="span4">
				<p align="center" id="slideright">
					<!--<input type="text"  class="input-xlarge " id="input" placeholder="Search Language" data-provide="typeahead" autocomplete="off">-->
					<div class="example example-twitter-oss">
						<input class="typeahead" id="typeahead" type="text" placeholder="Language Search" >
					</div>
				</p>

				<div class="row-fluid" id="legend">
				
					<div class="span4">
						<legend></legend>
					</div>
					
					<div class="span4">
						<p align="center" style="margin-top:-7px;">
							<b>OR</b>
						</p>
					</div>
					
					<div class="span4">
						<legend></legend>
					</div>
				</div>

				<p align="center" id="slideleft">
					<a class="btn btn-primary btn-large btn-block " style="width:284px;" href="inputlang.php">
						Create new Entry
					</a>
				</p>

			</div>			

			<div class="span4"></div>
		</div>	
		
	</div>
	
	<!-- Alert show -->
	<div class="container-fluid">
		<div class="row-fluid">
			<div class='' align='center' id='alertshow'></div>
		</div>
	</div>

	<!-- Language detail show -->
	<div class="container-fluid">
		<div class='row-fluid'>
			<div class="span6">			
				<div class='span12' id='boxed'>
					<div class="span6">Language Code (ISO)</div>
					<div class="span4" id="langcode_iso"></div>
					<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Language Code (WMF)</div>
					<div class="span4" id="langcode_wmf"></div>
					<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Language Name</div>
					<div class="span4" id="langname_eng"></div>
					<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Language Name (Autonym)</div>
					<div class="span4" id="langname_autonym"></div>
					<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Language Code (HTML)</div>
					<div class="span4" id="langname_html"></div>
					<a class="btn btn-primary edit edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Fallback code</div>
					<div class="span4" id="fallback_code"></div>
					<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Macro Language</div>
					<div class="span3 iconshow" id="macro_lang"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">WMF Project Status</div>
					<div class="span3 iconshow" value="yes" id="wmf_proj_status"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Translator</div>
					<div class="span3 iconshow" value="yes" id="translate"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>	

				<div class='span12' id='boxed'>
					<div class="span6">Dictionary</div>
					<div class="span3 iconshow" value="yes" id="dictionary"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Spellchecker</div>
					<div class="span3 iconshow" value="yes" id="spellchecker"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Glossary</div>
					<div class="span3 iconshow" value="yes" id="glossary"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>

				<div class='span12' id='boxed'>
					<div class="span6">Featured</div>
					<div class="span3 iconshow" value="yes" id="f_or_i"></div>
					<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
						<input type="checkbox" >
					</div>
				</div>
			</div>

			<!-- 2nd side of menu -->
			<div class='span6'>
				<div class="accordion span12" id="accordion2">

					<!-- Heading 1 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#uls">
								Universal Language Selector
							</a>
						</div>
						<div id="uls" class="accordion-body collapse in">
							<div class="accordion-inner">						
								<div class="span6">Webfonts</div>
								<div class="span3 iconshow" value="yes" id="jquery_webfonts"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>

							<div class="accordion-inner">
								<div class="span6">Input Methods</div>
								<div class="span3 iconshow" value="no" id="jquery_ime"></i></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>

							<div class="accordion-inner">
								<div class="span6">Internationalization Support</div>
								<div class="span3 iconshow" value="yes" id="jquery_uls"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
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
								<div class="span6">Input Method Library</div>
								<div class="span3 iconshow" value="yes" id="jquery_ime"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>

							<div class="accordion-inner">
								<div class="span6">Webfont Library</div>
								<div class="span3 iconshow" value="yes" id="jquery_webfonts"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>

							<div class="accordion-inner">
								<div class="span6">i18n Library</div>
								<div class="span3 iconshow" value="yes" id="jquery_i18n"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>

							<div class="accordion-inner">
								<div class="span6">ULS Library</div>
								<div class="span3 iconshow" value="yes" id="jquery_uls"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>
						</div>
					</div>

					<!-- Heading 3 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#legacy_ext">
								Legacy Extensions
							</a>
						</div>
						<div id="legacy_ext" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="span6">Narayam</div>
								<div class="span3 iconshow" value="yes" id="narayam"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>

							<div class="accordion-inner">
								<div class="span6">Webfonts</div>
								<div class="span3 iconshow" value="yes" id="webfonts"></div>
								<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								    <input type="checkbox" >
								</div>
							</div>
						</div>
					</div>

					<!-- Heading 4 -->
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#more_info" id="moreinfo">
								More Information on
							</a>
						</div>
						<div id="more_info" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="span5">Webfonts</div>
								<div class="span5" id="fontdetail"></div>
								<button class="btn btn-primary test binary"><i class="icon-pencil icon-white"></i></button>
							</div>

							<div class="accordion-inner">
								<div class="span5">Input Methods</div>
								<div class="span5" id="imedetail"></div>
								<button class="btn btn-primary test binary"><i class="icon-pencil icon-white"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Temp</h3>
		</div>
		<div class="modal-body">
			<p id="oldname" align="center"></p>
			<legend></legend>
			<p id="newvalue" align="center"></p>
			<p align='center'><input type="text" class="input-large" id="changeval" name="changeval" align='center'/></p>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary" id="save">Save changes</button>
		</div>
	</div>

</body>
</html>
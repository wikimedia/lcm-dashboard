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
	<script type="text/javascript" src="js/isosearch.js"></script>

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
	<div class="container">
		<div class="well">
		<form class="form-horizontal" method="post" action="langentry.php">
			<div class="control-group">
				<label  class="control-label">Languag Code (ISO)</label>
				<div class="controls">
						<div class="example example-twitter-oss">
							<input class="typeahead" id="typeahead" type="text" placeholder="Language Code (ISO)" required name="langcode_iso" required data-trigger='focus' data-title="ISO - Code"  data-placement='right' data-content="Check the ISO code of language here <a href='http://www.loc.gov/standards/iso639-2/php/code_list.php' target='_blank'>ISO Code list" data-html='true'>
						</div>
					<!--
					<input type="text" class="input-large" id="langcode_iso" required name="langcode_iso" required data-trigger='focus' data-title="ISO - Code"  data-placement='right' data-content="Check the ISO code of language here <a href='http://www.loc.gov/standards/iso639-2/php/code_list.php' target='_blank'>ISO Code list" data-html='true'>
					-->
				</div>
			</div>

			<div class="control-group">
				<label  class="control-label">Language Code (WMF)</label>
				<div class="controls">
					<input type="text" class="input-large" id="langcode_wmf " name="langcode_wmf "/>
				</div>
			</div>

			<div class="control-group">
				<label  class="control-label">Language Name (Eng)</label>
				<div class="controls">
					<input type="text" class="input-large" id="langname_eng" name="langname_eng">
				</div>
			</div>

			<div class="control-group">
				<label  class="control-label">Language Name (Autonym)</label>
				<div class="controls">
					<input type="text" class="input-large" id="langname_autonym" name="langname_autonym">
				</div>
			</div>

			<div class="control-group">
				<label  class="control-label">Language code (HTML)</label>
				<div class="controls">
					<input type="text" class="input-large" id="langname_html" name="langname_html">
				</div>
			</div>

			<div class="control-group">
				<label  class="control-label">Fallback code</label>
				<div class="controls">
					<input type="text" class="input-large" id="fallback_code" name="fallback_code"/>
				</div>
			</div>

			<legend></legend>

			<div class="control-group">
				<label class="control-label">Macro Language</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="macro_lang" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="macro_lang" value="0" />No</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">WMF Project status</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="wmf_proj_status" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="wmf_proj_status" value="0" />No</label>
				</div>
			</div>
			
			<legend></legend>

			<div class="control-group">
				<label class="control-label">Narayam</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="narayam" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="narayam" value="0" />No</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">jquery.ime</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="jquery_ime" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="jquery_ime" value="0" />No</label>
				</div>
			</div>

			<legend></legend>

			<div class="control-group">
				<label class="control-label">webfonts</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="webfonts" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="webfonts" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">uls.webfonts</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="jquery_webfonts" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="jquery_webfonts" value="0" />No</label>
				</div>
			</div>

			<legend></legend>

			<div class="control-group">
				<label class="control-label">i18n Mediawiki Core</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="i18n_mw_core" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="i18n_mw_core" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">jquery.i18n</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="jquery_i18n" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="jquery_i18n" value="0" />No</label>
				</div>
			</div>

			<legend></legend>
			
			<div class="control-group">
				<label class="control-label">Translate</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="translate" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="translate" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Dictionary</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="dictionary" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="dictionary" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Spellchecker</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="spellchecker" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="spellchecker" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Glossary</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="glossary" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="glossary" value="0" />No</label>
				</div>
			</div>

			<legend></legend>
			
			<div class="control-group">
				<label class="control-label">jquery.uls</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="jquery_uls" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="jquery_uls" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Feature / Incubator</label>
				<div class="controls">
					<label class="radio inline"> <input type="radio" class="" name="f_or_i" value="1" />Yes</label>
					<label class="radio inline"> <input type="radio" class="" name="f_or_i" value="0" />No</label>
				</div>
			</div>

			<div class="control-group">

				<div class="controls">
					<a class="btn btn-primary btn-large" id="submit">Submit</a>
				</div>
			</div>

<!-- over div -->
		</div>

		</form>
		</div>
	</div>

	<!--Model -->

	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Preview</h3>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
	<div id="lang1" class="span4">
		<div class="well">
			<table class="table table-striped" id="language1">
				<tr>
					<td><label  class="control-label">Language Code (ISO)</label> </td>
					<td><label  class="control-label" id = "langcode_iso1"></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Code (WMF)</label> </td>
					<td><label  class="control-label"></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Name</label> </td>
					<td><label  class="control-label"> </label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Name(Autonyme)</label> </td>
					<td><label  class="control-label"> </label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Code (HTML)</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langname_html']; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Macro Languages</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['macro_lang']; ?></label></td>	
				</tr>
			</table>
		</div>
	</div>

	
	<div id="lang2" class="span4">
		<div class="well">
			<table class="table table-striped" id="language2">
				<tr>
					<td><label  class="control-label"> WMF Project Status</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>
				<tr>
					<td><label  class="control-label">Fallback code</label> </td>
					<td><label  class="control-label"> 1</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Narayam</label> </td>
					<td><label  class="control-label"> 0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.ime</label> </td>
					<td><label  class="control-label"> 0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Webfonts</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.webfonts</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">i18n mw core</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.i18n</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.uls</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Translate</label> </td>
					<td><label  class="control-label">1</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Dictionary</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Spellchecker</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Glossary</label> </td>
					<td><label  class="control-label">0</label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Feature/incubator</label> </td>
					<td><label  class="control-label">Feature</label></td>	
				</tr>
			</table>
		</div>
	</div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Edit</button>
			<button class="btn btn-primary" id="save">Save changes</button>
		</div>
	</div>

	<link href="jquery.ime/css/jquery.ime.css" rel="stylesheet" />
	<script src="jquery.ime/src/jquery.ime.js"></script>
	<script src="jquery.ime/src/jquery.ime.selector.js"></script>
	<script src="jquery.ime/src/jquery.ime.preferences.js"></script>
	<script src="jquery.ime/src/jquery.ime.inputmethods.js"></script>
	<script>
		$(function() {
			$("#langcode_iso").popover();
			$("#langname_autonym").ime();

			$('#submit').click(function(){
				if ( $('#langcode_iso').val() == '' ) {
					console.log($('#langcode_iso').val());
					alert('Enter ISO code of Language');
				}
				else if ( $('#langcode_wmf').val() == ''){
					console.log('1');
					alert('Enter WMF code of Language');
				}
				else{
					//$('form').submit();
					console.log($('#langcode_wmf').val());
					$('#langcode_iso1').text($('#langcode_iso').val());	
					$('#langcode_wmf1').text($('#langcode_wmf').val());
					$('#myModal').modal('show'); 

				}
			})

			$('#save').click(function(event) {
				$('form').submit();
			});
		})
	</script>
</body>
</html>


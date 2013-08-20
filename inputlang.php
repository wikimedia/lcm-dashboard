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
	<div class="container">
		<div class="well">
		<form class="form-horizontal" method="post" action="langentry.php">
			<div class="control-group">
				<label  class="control-label">Languag Code (ISO)</label>
				<div class="controls">
					<input type="text" class="input-large" id="langcode_iso" required name="langcode_iso" required data-trigger='focus' data-title="ISO - Code"  data-placement='right' data-content="Check the ISO code of language here <a href='http://www.loc.gov/standards/iso639-2/php/code_list.php' target='_blank'>ISO Code list" data-html='true'>
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
				<label class="control-label">jquery.webfonts</label>
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
					<button class="btn btn-primary btn-large" value="submit" type="submit" id="submit">Submit</button>
				</div>
			</div>	
			
			
<!-- over div -->
		</div>

		</form>
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

			
			
			var dropdown1 ="<li>Harsh</li>";
  						
  			$('#dLabel').click(function() {
	    			//alert("bingo");
	    			console.log(dropdown1);
	    				    			
	    			$('#dLabel').append(dropdown1);
	    			//$('.dropdown-toggle').dropdown('show');
	    		});
		})
	</script>
</body>
</html>
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

	<?php
		if(isset($_SESSION['username'])){
			include "lib/header-wrap-with-login.php";
		}
		else{
			include "lib/header-wrap-without-login.php";
		}
	?>

	<?php
		$langcode_iso = $_POST['langcode_iso'];

		$langcode_iso = $_POST['langcode_iso'];
		$langcode_wmf = $_POST['langcode_wmf'] ? $_POST['langcode_wmf'] : '-';
		$langname_eng = $_POST['langname_eng'] ? $_POST['langname_eng'] : '-';
		$langname_autonym = $_POST['langname_autonym'] ? $_POST['langname_autonym'] : '-';
		$langname_html = $_POST['langname_html'] ? $_POST['langname_html'] : '-';
		$macro_lang = $_POST['macro_lang'] ?  $_POST['macro_lang'] : '-';
		$wmf_proj_status = $_POST['wmf_proj_status'] ? '1' : '0';
		$fallback_code = $_POST['fallback_code'] ? $_POST['fallback_code'] : '-';
		$narayam = $_POST['narayam']  ? '1' : '0';
		$jquery_ime = $_POST['jquery_ime'] ? '1' : '0';
		$webfonts = $_POST['webfonts'] ? '1' : '0';
		$jquery_webfonts = $_POST['jquery_webfonts'] ? '1' : '0';
		$i18n_mw_core = $_POST['i18n_mw_core'] ? '1' : '0';
		$jquery_uls = $_POST['jquery_i18n'] ? '1' : '0';
		$jquery_uls = $_POST['jquery_uls'] ? '1' : '0';
		$translate = $_POST['translate'] ? '1' : '0';
		$dictionary = $_POST['dictionary'] ? '1' : '0';
		$spellchecker = $_POST['spellchecker'] ? '1' : '0';
		$glossary = $_POST['glossary'] ? '1' : '0';
		$f_or_i = $_POST['f_or_i'] ? '1' : '0';

		$test = $_POST['f_or_i'];

		require 'lib/dbconnect.php';

		$con = mysql_connect($host,$user,$pass);
		$dbs = mysql_select_db($databaseName, $con);
//langcodeiso, langcodewmf, langname, langname_a, langcodehtml, macro_lang, wmf_pro_status, fallback_code, narayam, jquery_ime, webfonts, jquery_webfonts, i18n_mw_core, jquery_i18n, jquery_uls, translate1, dictionary, spellchecker, glossary ,froi)

		$query = "INSERT into langdetail(langcode_iso, langcode_wmf, langname_eng, langname_autonym, langname_html, macro_lang, wmf_proj_status, fallback_code, narayam, jquery_ime, webfonts, jquery_webfonts, i18n_mw_core, jquery_i18n, jquery_uls, translate, dictionary, spellchecker, glossary ,f_or_i) values('$langcode_iso', '$langcode_wmf', '$langname_eng', '$langname_autonym', '$langname_html', '$macro_lang', '$wmf_proj_status', '$fallback_code', '$narayam', '$jquery_ime', '$webfonts', '$jquery_webfonts', '$i18n_mw_core', '$jquery_i18n', '$jquery_uls', '$translate', '$dictionary', '$spellchecker', '$glossary' ,'$f_or_i')";
/*
		if (mysql_query($query)){
			exec('php script/nametoautonym.php');
			echo("<div class='alert alert-success' align='center'>Successfully stored in database</div>");
		}
		else{
			echo("<div class='alert alert-danger' align='center'>Fail to store in database</div>");
		}
*/
		//echo("<div class='alert alert-success' align='center'>Succesfully stored in database</div>");
	?>

	<div class="container-fluid">
	<div id="lang1" class="span6">
		<div class="well">
			<table class="table table-striped" id="language1">
				<tr>
					<td><label  class="control-label">Language Code (ISO)</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langcode_iso'] ? $_POST['langcode_iso'] : '-' ; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Code (WMF)</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langcode_wmf'] ? $_POST['langcode_wmf'] : '-'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Name</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langname_eng']; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Name(Autonyme)</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langname_autonym']; ?></label></td>	
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

	
	<div id="lang2" class="span6">
		<div class="well">
			<table class="table table-striped" id="language2">
				<tr>
					<td><label  class="control-label"> WMF Project Status</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['wmf_proj_status'] ? '1' : '0'; ?></label></td>	
				</tr>
				<tr>
					<td><label  class="control-label">Fallback code</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['fallback_code']; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Narayam</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['narayam'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.ime</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['jquery_ime'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Webfonts</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['webfonts'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.webfonts</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['jquery_webfonts'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">i18n mw core</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['i18n_mw_core'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.i18n</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['jquery_i18n'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">jquery.uls</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['jquery_uls'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Translate</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['translate'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Dictionary</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['dictionary'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Spellchecker</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['spellchecker'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Glossary</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['glossary'] ? '1' : '0'; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Feature/incubator</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['f_or_i'] ? '1' : '0'; ?></label></td>	
				</tr>
			</table>
		</div>	
	</div>
</div>
</body>
</html>
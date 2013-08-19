<!DOCTYPE html>
<html>
<head>

<?php
/*
echo $_POST['langcode_iso'];

echo $_POST['langcode_iso'];
echo $_POST['langcode_wmf'];
echo $_POST['langname_eng'];
echo $_POST['langname_autonym'];
echo $_POST['langname_html'];
echo $_POST['macro_lang'];
echo $_POST['wmf_proj_status'];
echo $_POST['fallback_code'];
echo $_POST['narayam'];
echo $_POST['jquery_ime'];
echo $_POST['webfonts'];
echo $_POST['jquery_webfonts'];
echo $_POST['i18n_mw_core'];
echo $_POST['jquery_i18n'];
echo $_POST['jquery_uls'];
echo $_POST['translate'];
echo $_POST['dictionary'];
echo $_POST['spellchecker'];
echo $_POST['glossary'];
echo $_POST['f_or_i'];

$test = $_POST['f_or_i'];
*/
//echo("<div class='alert alert-success' align='center'>Succesfully stored in database</div>");

?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<script src="js/jquery-1.10.2-min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

	<div class="navbar navbar-static-top navbar-inverse">
		<div class="navbar-inner ">
			<a class="brand" href="#">LCM - Dashboard</a>
			<ul class="nav pull-right nav-pills">
				<li><a href="index.html">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li class="active"><a href="langsearch.php">Language Search</a></li>
			</ul>
		</div>
	</div>

	<div class='alert alert-success' align='center'>Succesfully stored in database</div>
	<div id="lang1" class="span6">
		<div class="well">
			<table class="table table-striped" id="language1">
				<tr>
					<td><label  class="control-label">Language Code (ISO)</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langcode_iso']; ?></label></td>	
				</tr>

				<tr>
					<td><label  class="control-label">Language Code (WMF)</label> </td>
					<td><label  class="control-label"> <?php echo $_POST['langcode_wmf']; ?></label></td>	
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
</body>
</html>
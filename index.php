<?php
	session_start();
	include 'lib/dbconnect.php';
	$tableName = "langdetail";

	$con = mysql_connect($host, $user, $pass);
	$dbs = mysql_select_db($databaseName, $con);

	mysql_set_charset("utf8", $con);

	$query = $_POST['query'];

	//for featured and incubator languages
	$result = mysql_query("SELECT * FROM $tableName where f_or_i='1'", $con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$feature = $i;

	//for webfonts
	$result = mysql_query("SELECT * FROM $tableName where jquery_webfonts='1'", $con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$webfonts = $i;

	//For input methods
	$result = mysql_query("SELECT * FROM $tableName where jquery_ime='1'", $con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$ime = $i;

	$result = mysql_query("SELECT * FROM $tableName where jquery_i18n='1'", $con);
	$i = 0;
	while ($result1 = mysql_fetch_assoc($result)) {
		$i = $i + 1;
	}
	$i18n = $i;
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

	<div class="container-fluid hero-unit">
		<h1>Language Coverage Matrix Dashboard</h1>
		<p>The Language Coverage Matrix dashboard would help automate the information about language
		support provided by the Wikimedia Language Engineering team</p>
		<!--
		<p>
			<a class="btn btn-primary btn-large">
				Learn more
			</a>
		</p>
	-->
	</div>
	<div class="container-fluid well">
		<div class="row-fluid">

			<div class="span6 row-fluid">
			<div class="span4">
				<h4 align="center">Language Search</h4 >
			</div>

			<div class="span8" align="center">
				<div class="example example-twitter-oss" id="noanimate">
					<input class="typeahead" id="typeahead" type="text" placeholder="Language Search" >
				</div>
			</div>
		</div>

		<div class="container-fluid" id="option-box">
			<div class="span6 row-fluid">

			<label class="checkbox inline span4" style="margin-left:10px;">
				<input type="checkbox" id="jquery_ime" value="jquery_ime"><b> Input Methods</b>
			</label>

			<label class="checkbox inline span4">
				<input type="checkbox" id="jquery_webfonts" value="jquery_webfonts"><b> webfonts</b>
			</label>

			<label class="checkbox inline span4">
				<input type="checkbox" id="jquery_i18n"
					value="jquery_i18n"><b>Internationalization Library</b>
			</label>
		</div>
	</div>

		<div class="span12 row-fluid" style="margin-top:10px;">
			<label class="radio inline span2">
				<input type="radio" id="list_graphics" name="list_graphics" value="list" checked><b>List</b>
			</label>

			<label class="radio inline span2">
				<input type="radio" id="list_graphics" name="list_graphics" value="graphics"><b>Graphics</b>
			</label>
		</div>
	</div>

	</div>

	<div class="container-fluid" id="list">
			<div class="row-fluid span2" id="back_button" style="display:none;margin-bottom:10px;">
				<button class="btn btn-primary">Back to All Languages</button>
			</div>
		<div class="row-fluid">
		<?php
			if (isset($_SESSION['username'])) {
				require 'lib/langdetailadmin.php';
			}
			else{
				require 'lib/langdetail.php';
			}
		?>
		</div>

	<div class='row-fluid list' id=''>
		<div id="loader" align="center">
			<img src="img/ajax-loader.gif" align="center">
		</div>
		<div class="row-fluid class12" id="data">
			<!--
			<table class='table table-striped table-bordered' id='langlist'>
			</table>
-->
		</div>
	</div>
	</div>

	<div class="container-fluid well" id="graphics" style="display:none;">
		<div class="row-fluid" id="graph_data" align="center">			
		</div>
	</div>

	<script type="text/javascript">
		$(function(){
			$( document ).on( 'click', '.ind_lang', function () {
				event.preventDefault();
			$this = $(this);
				console.log($this.attr('id'));
				languageDetail($this.attr('id'));
		} );

			$( '#back_button' ).click( function () {
				$('#langdetailshow,#back_button').fadeOut(300, function(){
					$('#data').fadeIn(300);
				});
				
			});

			$( "input[type='radio']" ).change( function(event) {
				$this = $(this);
				if ($this.val() == 'list'){
					$('#graphics').hide(1000);
					$('#list').show(1500);
				}
				else{
					$('#list').hide(1000);
					$('#graphics').show(1500);
				}
			});

			$(document).on('click','#webfont_link',function(event){
				event.preventDefault();
				$('#webfont_show').show();
			})			
		})
	</script>
	<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
	<script type="text/javascript" src="js/pi.js"></script>

	<script type="text/javascript">
		var a = <?php echo $ime ?>;
		var b = <?php echo $webfonts ?>;
		var c = <?php echo $i18n ?>;
		tests({'ime' : a,'webfonts':b,'i18n':c});
	</script>
</body>
</html>

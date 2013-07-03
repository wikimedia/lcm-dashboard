<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="content-type" content="text-html; charset=utf-8">	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	
	<!--<link rel="stylesheet" type="text/css" href="example.css"> -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	
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

	<div class="hero-unit " align='center' id="title">
		<h1>Language Search</h1>
		<p>Here you can search a language for all the details or Create a new Entry</p>
	</div>
	<div class="container-fluid" style="padding-top:30px;" id='boxbutton'>
		<div class="row-fluid">
			<div class="span4"></div>
			<div class="span4">
				<p align="center" id="slideright">
					<input type="text"  class="input-xlarge " id="input" placeholder="Search Language" data-provide="typeahead" autocomplete="on">


					<!--	
					<div class ="example example-countries">
					<!--	<input type="text"  class="typeahead" id="input1" > 
				</div> -->
				<!--<button type="submit" class="btn btn-medium">Search</button>-->
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
				<a class="btn btn-primary btn-large btn-block " style="width:284px;" href="inputlang.html">
					Create new Entry
				</a>
			</p>
		</div>
		<div class="span4"></div>
	</div>	
</div>

<div id="lang1" class="span6">
	<div class="well">
		<table class="table table-striped" id="language1">

		</table>
	</div>	
</div>


<div id="lang2" class="span6">
	<div class="well">
		<table class="table table-striped" id="language2">

		</table>
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
		<!-- complete -->
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		<button class="btn btn-primary" id="save">Save changes</button>
	</div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<!-- <script src="js/bootstrap-typeahead.js"></script> -->
<script type="text/javascript" src='js/langsearch.js'> </script>


<!-- This is suggestion + autocomplete
	<script src="bootstrap/js/typeahead.js"></script>
	<script src="http://twitter.github.com/hogan.js/builds/2.0.0/hogan-2.0.0.js"></script>
	
	<script type="text/javascript">
			$.ajax({
    				url : "test.php",
    				type : "POST",
    				data: "query=G" ,
    				dataType : "JSON",
    				async : false,
    				success : function(data){
    					console.log(data);
    					//res(data);
    				}
    			})
    	
		$('#input1').typeahead([{                                
  				name: 'countries',                                                          
  				remote : "test.php?q=%QUERY",
  				limit: 10,
  				engine : Hogan,
  				selected : function(item) { console.log(item) }  
  				                                                                
		}]);
	</script>
-->
</body>
</html>
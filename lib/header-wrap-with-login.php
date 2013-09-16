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
					<li>
						<form class="navbar-search pull-left">
							<div class="example example-twitter-oss">
								<input class="typeahead" id="typeahead" type="text" placeholder="Language Search" >
							</div>
						</form>
					</li>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="langfilter.php">Languages</a></li>
					<li><a href="lib/logout.php">Logout</a></li>
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
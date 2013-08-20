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
					<li><a href="index.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Languages</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
						<!-- Login form here -->
						<form action="lib/login.php" method="post" accept-charset="UTF-8">
							<input id="username" class="input-large" type="text" name="username" autocomplete="off" placeholder="Username"/>
							<input id="password" class="input-large" type="password" name="password" placeholder="Password"/>
							<input id="remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="remember_me" value="1" />
							<label class="string optional" for="remember_me"> Remember me</label>
							<input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
						</form>
						</div>
          			</li>
				</ul>
			</div>
		</div>
	</div>
</div>
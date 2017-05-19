<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Wireless Sensor Netword</a>
				</div>
				<ul class="nav navbar-nav">
					<!-- NAV Top -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id="login"><span class="glyphicon glyphicon-user"></span>
						<?php 
						if($loged_in == false){
							echo ' Sign Up / Login';
						} else echo "Hello $username";
						?>
					</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>
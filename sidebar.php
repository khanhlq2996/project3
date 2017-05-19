<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a href="index.php">Dashboard</a>
			</h4>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a href="index.php?v=live">Live</a>
			</h4>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Table</a>
			</h4>
		</div>
		<div id="collapse2" class="panel-collapse collapse">
			<div>
				<ul class="nav nav-pills nav-stacked"  role="tablist">
					<li><a href="index.php?v=table&tb=total">Total</a></li>
					<li><a href="index.php?v=table&tb=sensor">By Sensor</a></li>
					<li><a href="index.php?v=table&tb=attribute">By Attribute</a></li>
					<li><a href="index.php?v=table&tb=location">By Location</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Chart</a>
			</h4>
		</div>
		<div id="collapse3" class="panel-collapse collapse">
			<div>
				<ul class="nav nav-pills nav-stacked"  role="tablist">
					<li><a href="index.php?v=chart&ch=total">Total</a></li>
					<li><a href="index.php?v=chart&ch=temperiature">By Temperature</a></li>
					<li><a href="index.php?v=chart&ch=rh">By RH</a></li>
					<li><a href="index.php?v=chart&ch=vLight">By vLight</a></li>
					<li><a href="index.php?v=chart&ch=iLight">By iLight</a></li>
					<li><a href="index.php?v=chart&ch=location">By Location</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">From CSV File</a>
			</h4>
		</div>
		<div id="collapse4" class="panel-collapse collapse">
			<div>
				<ul class="nav nav-pills nav-stacked"  role="tablist">
					<li><a href="index.php?v=file&f=upload">Upload new file</a></li>
					<li><a href="index.php?v=file&f=select">Select old file</a></li>
					<li><a href="index.php?v=file&f=manager	">File manager</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
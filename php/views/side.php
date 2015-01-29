<!-- SIDEBAR -->
<div id="side" class="col-sm-12 col-md-3">

<!-- TODO: Give each sidebar module its own box with shadow, pop-up from background. -->
<!-- TODO: Convert sidebar to use panels -->

<div class="panel panel-default sidebar-panel">
	<div class="panel-heading">
		<div class="panel-title"><h3 class="text-primary">Loan Actions</h3></div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12 col-xs-6">
				<a href="/checkout.php"><button type="button" class="btn btn-block btn-success loan-btn"><span class="lead">New Loan</span></button></a>
			</div>
			<div class="col-md-12 col-xs-6">
				<a href="/checkin.php"><button type="button" class="btn btn-block btn-default loan-btn"><span class="lead">Return Loan</span></button></a>
			</div>
		</div>
	</div>
</div>

<div id="loan-inventory" class="panel panel-default sidebar-panel">
	<div class="panel-heading">
		<div class="panel-title"><h3 class="text-primary">Available Inventory</h3></div>
	</div>
	<div class="panel-body">
		<div id="loan-inventory-categories" class="row text-center"> 
<!-- TODO: Load from json, click div to load that item types invenory mgmt page (overview) -->
			<div id="dell-laptop" class="inventory-item col-md-4 col-sm-2 col-xs-4">
				<img class="img img-responsive" src="/assets/img/laptop.png">
				<span class="badge">12</span>
			</div>
			<div id="mic-handheld" class="inventory-item col-md-4 col-sm-2 col-xs-4">
				<img class="img img-responsive" src="/assets/img/mic.png">
				<span class="badge">4</span>
			</div>
			<div id="presenter" class="inventory-item col-md-4 col-sm-2 col-xs-4">
				<img class="img img-responsive" src="/assets/img/remote.png">
				<span class="badge">2</span>
			</div>	
			<div id="usb-webcam" class="inventory-item col-md-4 col-sm-2 col-xs-4">
				<img class="img img-responsive" src="/assets/img/webcam.png">
				<span class="badge">1</span>
			</div>		
			<div id="hdmi-adapter" class="inventory-item col-md-4 col-sm-2 col-xs-4">
				<img class="img img-responsive" src="/assets/img/hdmi-adapter.png">
				<span class="badge">4</span>
			</div>	
			<div id="vga-adapter" class="inventory-item col-md-4 col-sm-2 col-xs-4">
				<img class="img img-responsive" src="/assets/img/vga-adapter.png">
				<span class="badge">3</span>
			</div>																												
		</div>
	</div>
<!-- Would show how many left / how many total. Example: Laptops (4/5) -->
</div>


<div id="loan-admin" class="sidebar-module">
	<div class="row">
		<h3 class="text-primary text-center">Admin Options</h3>
		<hr>
	</div>
	<div class="row">
		<ul id="admin-log-options" class="nav nav-stackable nav-pills">
			<li role="presentation"><a href="#">Manage Assets</a></li>
			<li role="presentation"><a href="#">Manage Users</a></li>
			<li role="presentation"><a href="#"></a></li>
		</ul>
	</div>			
</div>
<!-- 					<div class="loan-category">
	<h4 title="Adapters, Mice, Speakers">Accessories</h4>
	<button type="button" class="btn btn-primary loan-btn">Check Out</button>
	<button type="button" class="btn btn-info loan-btn">Check In</button>						
</div> -->
</div>
<!-- SIDEBAR END -->

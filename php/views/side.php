	<!-- SIDEBAR -->
				<div id="side" class="col-sm-3">

					<!-- TODO: Give each sidebar module its own box with shadow, pop-up from background. -->

					<div id="loan-category" class="sidebar-module">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="text-primary text-center">Loan Actions</h3>
								<hr>
							</div>
							<div class="col-sm-6 col-md-12">
								<a href="/checkout.php"><button type="button" class="btn btn-success loan-btn"><span class="lead">New Loan</span></button></a>
							</div>
							<div class="col-sm-6 col-md-12">
								<a href="/checkin.php"><button type="button" class="btn btn-default loan-btn"><span class="lead">Return Loan</span></button></a>
							</div>
						</div>
					</div>

					<div id="loan-inventory" class="sidebar-module">
						<div class="row">
							<h3 class="text-primary text-center">Available Inventory</h3>
							<hr>
						</div>
						<div id="loan-inventory-categories" class="row text-center"> 
						<!-- Each inventory category item gets own col-md-3 span, that way rollover looks good. Dynamically load from ajax request on available asset classes and inventories. IDs of main div (with class col-md-3) will have custom idents loaded. -->
							<div id="loan-type-laptop1" class="inventory-item col-md-4 col-xs-3">
								<img class="img img-responsive" src="/assets/img/laptop.png">
								<span class="badge">12</span>
							</div>
							<div id="loan-type-mic" class="inventory-item col-md-4 col-xs-3">
								<img class="img img-responsive" src="/assets/img/mic.png">
								<span class="badge">4</span>
							</div>
							<div id="loan-type-remote" class="inventory-item col-md-4 col-xs-3">
								<img class="img img-responsive" src="/assets/img/remote.png">
								<span class="badge">2</span>
							</div>	
							<div id="loan-type-webcam" class="inventory-item col-md-4 col-xs-3">
								<img class="img img-responsive" src="/assets/img/webcam.png">
								<span class="badge">1</span>
							</div>		
							<div id="loan-type-hdmi-adapter" class="inventory-item col-md-4 col-xs-3">
								<img class="img img-responsive" src="/assets/img/hdmi-adapter.png">
								<span class="badge">4</span>
							</div>	
							<div id="loan-type-vga-adapter" class="inventory-item col-md-4 col-xs-3">
								<img class="img img-responsive" src="/assets/img/camera.png">
								<span class="badge">3</span>
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

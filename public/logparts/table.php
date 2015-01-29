<!-- <div class="row">
  <h3>Loan Table</h3>
	<hr>
</div>
 -->
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-primary"> <!-- Main Loan Table Panel -->
			<div class="panel-heading">
				<div class="panel-title">Loaner Log</div>
			</div>
			<div id="log-panel-body" class="panel-body">
				<div class="row">
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="#today">Due Today</a></li>
						<li role="presentation" ><a href="#longterm">Due Later</a></li>			
					</ul>
				</div>
			</div>
			<!-- LOANER TABLE -->
			<div class="table-responsive">
				<table id="loan-table" class="table table-hover table-bordered text-center">
					<thead>
						<tr>
							<th>Name</th>
							<!-- <th>User Type</th> -->
							<th class="hidden-xs">Details</th>
							<th>Time</th>
							<!-- <th>Due</th> -->
							<th>More</th>
						</tr>
					</thead>
					<tbody>
						<tr class="loan-row" data-loan-id="1">
							<td class="user-td text-center">
								<span class="user-name">John Fry</span>
								<span class="user-type label label-info visible-xs-block visible-sm-block visible-md-inline visible-lg-inline">Student</span>
							</td>
							<td class="assets-td hidden-xs">
								<div class="asset-preview more-info pull-right">
									<img class="img img-responsive" src="/assets/img/info.png">
								</div>										
								<div class="asset-preview">
									<img class="img img-responsive" src="/assets/img/laptop.png">
									<span class="badge">14</span>
								</div>
								<div class="asset-preview">
									<img class="img img-responsive" src="/assets/img/mic.png">
								</div>
								<div class="asset-preview">
									<img class="img img-responsive" src="/assets/img/vga-adapter.png">
								</div>
							</td>
							<td class="time-td">
								<code class="table-info-date">12:42pm</code>
							</td>
<!-- 							<td class="due-td">
								<code class="table-info-date">today</code>
							</td> -->
							<td class="options-td">
								<button class="btn btn-xs btn-info btn-block visible-xs-block">Info</button>
								<button class="check-in btn btn-xs btn-block btn-primary">Check In</button>
							</td>
						</tr>
						<tr class="loan-row" data-loan-id="1">
							<td class="user-td text-center">
								<span class="user-name">John Fry</span>
								<span class="user-type label label-info visible-xs-block visible-sm-block visible-md-inline visible-lg-inline">Student</span>
							</td>
							<td class="assets-td hidden-xs">
								<div class="asset-preview more-info pull-right">
									<img class="img img-responsive" src="/assets/img/info.png">
								</div>										
								<div class="asset-preview">
									<img class="img img-responsive" src="/assets/img/laptop.png">
									<span class="badge">14</span>
								</div>
								<div class="asset-preview">
									<img class="img img-responsive" src="/assets/img/vga-adapter.png">
								</div>
							</td>
							<td class="time-td">
								<code class="table-info-date">12:42pm</code>
							</td>
<!-- 							<td class="due-td">
								<code class="table-info-date">Today</code>
							</td> -->
							<td class="options-td">
								<button class="btn btn-xs btn-info btn-block visible-xs-block">Info</button>
								<button class="check-in btn btn-xs btn-block btn-primary">Check In</button>
							</td>
						</tr>									
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
				<!-- TODO: Pagination? -->
			</div>
		</div> <!-- Main Loan Table Panel End -->
	</div>
</div>

<!-- TODO: Limit bottom two tables to X rows each so they stay similar sizes. -->

<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="panel-title">Overdue Loans</div>
			</div>
<!-- 			<div class="panel-body">
				<p class="lead"> Lalala</p>
			</div> -->
			<table id="overdue-table" class="table table-hover table-bordered text-center">
				<thead>
					<tr>
						<th>Name</th>
						<th class="hidden-xs">Details</th>
						<th>Due</th>
						<th>More</th>
					</tr>
				</thead>
				<tbody>
					<tr class="loan-row" data-loan-id="1">
						<td class="user-td text-center">
							<!-- <span class="pull-left user-type label label-info">&nbsp</span>						 -->
							<span class="user-name user-type-2">John Fry</span>
						</td>
						<td class="assets-td hidden-xs">
							<!-- <div class="asset-preview more-info pull-right">
								<img class="img img-responsive" src="/assets/img/info.png">
							</div>		 -->								
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/laptop.png">
								<!-- <span class="badge">14</span> -->
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/mic.png">
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/vga-adapter.png">
							</div>
						</td>
						<td class="due-td">
							<span class="table-info-date label label-danger">1 day</span>
						</td>
						<td class="options-td">
							<button class="btn btn-xs btn-info btn-block visible-xs-block">Info</button>
							<button class="check-in btn btn-xs btn-block btn-primary">Check In</button>
						</td>
					</tr>			
					<tr class="loan-row" data-loan-id="1">
						<td class="user-td text-center">
							<!-- <span class="pull-left user-type label label-warning">&nbsp</span>						 -->
							<span class="user-name user-type-1">Bill Nye</span>
						</td>
						<td class="assets-td hidden-xs">	
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/laptop.png">
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/mic.png">
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/vga-adapter.png">
							</div>
						</td>
						<td class="due-td">
							<span class="table-info-date label label-danger">2 weeks</span>
						</td>
						<td class="options-td">
							<button class="btn btn-xs btn-info btn-block visible-xs-block">Info</button>
							<button class="check-in btn btn-xs btn-block btn-primary">Check In</button>
						</td>
					</tr>									
				</tbody>
			</table>
			<div class="panel-footer">
				<!-- <nav>
				  <ul class="pager">
				    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
				    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
				  </ul>
				</nav> -->
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">Reservations</div>
			</div>
<!-- 			<div class="panel-body">
				<p class="lead"> Lalala</p>
			</div> -->
			<table id="reserved-table" class="table table-hover table-bordered text-center">
				<thead>
					<tr>
						<th>Name</th>
						<th class="hidden-xs">Details</th>
						<th>When</th>
						<th>More</th>
					</tr>
				</thead>
				<tbody>
					<tr class="loan-row" data-loan-id="1">
						<td class="user-td text-center">
							<span class="user-name user-type-1">Jon Java</span>
						</td>
						<td class="assets-td hidden-xs">								
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/laptop.png">
								<span class="badge">14</span>
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/mic.png">
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/vga-adapter.png">
							</div>
						</td>
						<td class="time-td">
							<span class="table-info-date label label-info">today</span>
						</td>
						<td class="options-td">
							<button class="btn btn-xs btn-info btn-block visible-xs-block">Info</button>
							<button class="check-in btn btn-xs btn-block btn-primary">Check In</button>
						</td>
					</tr>
					<tr class="loan-row" data-loan-id="1">
						<td class="user-td text-center">
							<span class="user-name user-type-2">John Fry</span>
						</td>
						<td class="assets-td hidden-xs">								
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/laptop.png">
								<span class="badge">14</span>
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/mic.png">
							</div>
							<div class="asset-preview">
								<img class="img img-responsive" src="/assets/img/vga-adapter.png">
							</div>
						</td>
						<td class="time-td">
							<span class="table-info-date label label-info">1 week</span>
						</td>
						<td class="options-td">
							<button class="btn btn-xs btn-info btn-block visible-xs-block">Info</button>
							<button class="check-in btn btn-xs btn-block btn-primary">Check In</button>
						</td>
					</tr>							
				</tbody>
			</table>
			<div class="panel-footer">
				<!-- <nav>
				  <ul class="pager">
				    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
				    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
				  </ul>
				</nav> -->
			</div>
		</div>

	</div>
</div>

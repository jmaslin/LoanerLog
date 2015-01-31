<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loaner Log</title>
		<!-- CSS -->
		<link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/assets/css/main.css" rel="stylesheet" media="screen">
		<link href="/assets/css/loantable.css" rel="stylesheet" media="screen">
		<!-- JS -->
		<script src="/components/jquery/dist/jquery.min.js"></script>
		<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="icon" href="/favicon.ico" />
		<!-- PickADate -->
		<script src="/components/pickadate/lib/picker.js"></script>
		<script src="/components/pickadate/lib/picker.date.js"></script>
		<script src="/components/pickadate/lib/picker.time.js"></script>
		<link href="/components/pickadate/lib/themes/classic.css" rel="stylesheet" media="screen"></script>
		<link href="/components/pickadate/lib/themes/classic.date.css" rel="stylesheet" media="screen"></script>
		<link href="/components/pickadate/lib/themes/classic.time.css" rel="stylesheet" media="screen"></script>
		<!-- SweetAlert -->
		<script src="/assets/js/sweet-alert.js"></script>
		<link href="/components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet" media="screen">
		<!-- Moment -->
		<script src="/components/moment/min/moment.min.js"></script>
		<!-- HideSeek -->
		<script src="/components/hideseek/jquery.hideseek.min.js"></script>
		<!-- Bootstrap Select -->
		<link href="/components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" media="screen">
		<script src="/components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	</head>
	<body>

		<div class="container">

			<!-- HEADER -->
			<div id="head" class="row">			
				<div class="col-sm-8">	
					<h1 class="head-item"><a id="page-title" href="/index.php">Loaner Log</a> <a id="org-linkback" href="#"><small class="text-primary">Intranet</small></a></h1>
				</div>
				<div class="col-sm-4">
					<div class="lead head-item user-login pull-right">
						<p>Hello,</p> <a id="logged-in" href="#profile"><span id="user-logged-in" class="text-primary">Justin Maslin</span></a>&nbsp;
						<button disabled type="button" class="btn btn-sm btn-info text-right">Logout</button>
					</div>
				</div>
				<div class="col-md-12">
					<div class="hr"><hr></div>	
				</div>	
			</div>
			<!-- HEADER END -->
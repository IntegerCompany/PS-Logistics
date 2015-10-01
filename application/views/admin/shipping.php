<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PS Logistics LLC</title>
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/css/application.css">
	<link rel="stylesheet" href="/public/css/admin_theme.css">
	<!-- add shipping.css -->
	<link rel="stylesheet" href="/public/css/shipping.css">
</head>
<body>
<div id="navigation">
	<a href="/"><img src="/public/img/logo.png" class="img-responsive nav_logo" alt=""></a>
	<ul>
		<!-- add class .active to LI when this page active -->
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				map
			</a>
		</li>
		<li class="active">
			<a href="/shipping">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				shipping
			</a>
		</li>
		<li>
			<a href="/stuff">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				stuff
			</a>
		</li>
		<li>
			<a href="/truck">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				truck
			</a>
		</li>
		<li>
			<a href="/trailer">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				trailer
				</a>
		</li>
		<li>
			<a href="/broker">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				broker
			</a>
		</li>
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				phone
			</a>
		</li>
	</ul>
	<div class="controls">
		<a href="/logout" class="logout col-md-6 col-xs-12">logout</a>
		<a href="javascript:;" class="change_pass col-md-6 col-xs-12">change pass</a>
	</div>
</div>
<div id="content">
	<div class="row">
		<div class="container-fluid">

			<div class="admin_top">
				<a class="visible-xs visible-sm toggle_menu" href="javascript:;">
					toggle
				</a>
				<h2 class="admin_title">shipping</h2>
				<button type="button" class="_btn add_new" data-toggle="modal" data-target="#shippingModal">
				  new
				</button>
			</div>

			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Library</a></li>
			  <li class="active">Data</li>
			  <li class="print">
			  	<i class="icon-print5"></i>
			  </li>
			</ol>
			
			<table class="global_table table shipping_table table-bordered">
				<thead>
					<tr>
						<th>
							#59 
							<img src="/public/img/test_ava.jpg" class="img-responsive img-circle" alt="">
							Jason Statham
						</th>
						<th colspan="2">
							Invoice #V00123 
						</th>
						<th colspan="2">
							<span>
								Free
							</span>
							<a href="javascript:;" class="_btn edit pull-right">
								<i class="icon-params"></i>
							</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="clearfix">
								<div class="pull-left">
									<i class="icon-frontal19"></i>
								</div>
								<div class="pull-left">
									<span class="model_name">FREIGHTLINER</span>  
									<br>
									<span class="model_type">2003  K31359</span>
								</div>
							</div>
							<div>
							<i class="icon-caravan1"></i>
								R53103
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="pull-left">
									<i class="icon-locator"></i>	
								</div>
								<div class="pull-left">
									Los Angeles, CA <br>
									Sep 21 12:00
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="pull-left">
									<i class="icon-dollar9"></i>	
								</div>
								<div class="pull-left">
									American Transport <br>
									<span class="contact_name">
										Tommy
									</span>
								</div>
							</div>
							<div>
								<i class="icon-dollar9"></i>	
								344-433-434
							</div>
						</td>
						<td>
							<div class="clearfix">
								<div class="pull-left">
									<i class="icon-cart19"></i>
									glass
									<br>
									<i class="icon-weight41"></i>
									12 T
								</div>
							</div>
						</td>
						<td>
							<div class="clearfix">
								<i class="icon-loading1"></i>
									124 / 250 $
								<br>
									<i class="icon-loading1"></i>
									120 $
							</div>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>

</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/core.js"></script>

</body>
</html>

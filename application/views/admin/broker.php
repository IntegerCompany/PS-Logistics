<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PS Logistics LLC</title>
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="/public/css/application.css">
	<link rel="stylesheet" href="/public/css/admin_theme.css">
</head>
<body>

<!-- login modal -->
<div class="modal fade" id="brokerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="container-fluid">
      		<div class="col-md-12">
						<!-- 
							new form, make same for edit
							ps. delete this comment after done
						-->
						<form class="form global_form">
							<div class="caption">
								new
							</div>
							<div class="form-group">
							  <label for="broker_mc">mc</label>
							  <input type="text" class="form-control" id="broker_mc">
							</div>
							<div class="form-group">
							  <label for="broker_name">name</label>
							  <input type="text" class="form-control" id="broker_name">
							</div>
							<div class="form-group">
							  <label for="broker_adress">adress</label>
							  <input type="text" class="form-control" id="broker_adress">
							</div>
							<div class="form-group">
							  <label for="broker_city">city</label>
							  <input type="text" class="form-control" id="broker_city">
							</div>
							<!-- add usa states -->
							<div class="form-group">
							  <label for="broker_state">state</label>
							  <select class="form-control" id="broker_state">
							    <option value="">1</option>
							    <option value="">2</option>
							    <option value="">3</option>
							    <option value="">4</option>
							    <option value="">5</option>
							  </select>
							</div>
							<div class="form-group">
							  <label for="broker_city">city</label>
							  <input type="text" class="form-control" id="broker_city">
							</div>
							<div class="form-group">
							  <label for="broker_zip">zip</label>
							  <input type="text" class="form-control" id="broker_zip">
							</div>
							<!-- this select data was takken from original site -->
							<div class="form-group">
							  <label for="broker_payment_type">payment type</label>
							  <select class="form-control" id="broker_payment_type">
							    <option>Factoring</option>
							    <option>QP</option>
							    <option>Direct</option>
							  </select>
							</div>
							<div class="form-group">
							  <label for="broker_payment_form">payment form</label>
								<select class="form-control" id="broker_payment_form">
								    <option>ACH</option>
								    <option>Check /M</option>
								    <option>Comcheck</option>
								    <option>T-Check</option>
								    <option>EFS-Check</option>
								  </select>
							</div>
							<div class="form-group">
							  <label for="broker_interest">interest</label>
							  <input type="text" class="form-control" id="broker_interest">
							</div>
							<div class="form-group">
							  <label for="broker_days">days</label>
							  <input type="text" class="form-control" id="broker_days">
							</div>
							<div class="form-group">
								<label for="broker_notes">notes</label>
								<textarea class="form-control" rows="3"></textarea>
								<button type="submit" class="_btn add_new">Submit</button>
								<button type="submit" class="_btn delete">Discard</button>
							</div>
						</form>

	        </div>
	      </div>
      </div>
    </div>
  </div>
</div>

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
		<li >
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
		<li class="active">
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
		<li>
			<a href="/maintenance">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				maintenance
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
				<h2 class="admin_title">Broker</h2>
				<button type="button" class="_btn add_new" data-toggle="modal" data-target="#brokerModal">
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
			
			<table class="global_table table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Adress</th>
						<th colspan="2">Settings</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Jason Statham
						</td>
						<td>Trailer</td>
						<td class="td-icon-width">
							<a href="javascript:void(0);" class="edit-icon" title="edit">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
						<td class="td-icon-width">
							<a href="javascript:void(0);" class="edit-icon" title="edit">
								<i class="fa fa-user"></i>
							</a>
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

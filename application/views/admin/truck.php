<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PS Logistics LLC</title>
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/css/application.css">
	<link rel="stylesheet" href="/public/css/admin_theme.css">
</head>
<body>

<!-- login modal -->
<div class="modal fade" id="truckModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
							  <label for="truck_id">truck #</label>
							  <input type="text" class="form-control" id="truck_id">
							</div>
							<div class="form-group">
							  <label for="truck_license_plate">license plate</label>
							  <input type="text" class="form-control" id="truck_license_plate">
							</div>
							<div class="form-group">
								<label for="truck_license_plate_exp">exp. license plate</label>
								<div class="row">
									<div class="col-md-4">
										<select class="form-control" id="truck_license_plate_exp">
									    <option value="">2015</option>
									    <option value="">2016</option>
									  </select>
									</div>
									<div class="col-md-4">
										<select class="form-control">
										  <option value="">January</option>
										  <option value="">February</option>
										  <option value="">March</option>
										  <option value="">April</option>
										  <option value="">May</option>
										  <option value="">June</option>
										  <option value="">July</option>
										  <option value="">August</option>
										  <option value="">September</option>
										  <option value="">October</option>
										  <option value="">November</option>
										  <option value="">December</option>
										</select>		
									</div>
									<!-- set more days -->
									<div class="col-md-4">
										<select class="form-control">
										  <option value="">1</option>
										  <option value="">2</option>
										  <option value="">3</option>
										  <option value="">4</option>
										  <option value="">5</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
							  <label for="truck_make">make</label>
							  <input type="text" class="form-control" id="truck_make">
							</div>
							<!-- make more years... -->
							<div class="form-group">
							  <label for="truck_year">year</label>
							  <select class="form-control" id="truck_year">
							    <option value="">1990</option>
							    <option value="">1991</option>
							    <option value="">1992</option>
							    <option value="">1993</option>
							    <option value="">1994</option>
							  </select>
							</div>
							<div class="form-group">
							  <label for="truck_color">color</label>
							  <input type="text" class="form-control" id="truck_color">
							</div>
							<div class="form-group">
							  <label for="trailer_vin">VIN #</label>
							  <input type="text" class="form-control" id="trailer_vin">
							</div>
							<div class="form-group">
								<label for="trailer_annual_inspection_exp">exp. annual inspection</label>
								<div class="row">
									<div class="col-md-4">
										<select class="form-control" id="trailer_annual_inspection_exp">
									    <option value="">2015</option>
									    <option value="">2016</option>
									  </select>
									</div>
									<div class="col-md-4">
										<select class="form-control">
										  <option value="">January</option>
										  <option value="">February</option>
										  <option value="">March</option>
										  <option value="">April</option>
										  <option value="">May</option>
										  <option value="">June</option>
										  <option value="">July</option>
										  <option value="">August</option>
										  <option value="">September</option>
										  <option value="">October</option>
										  <option value="">November</option>
										  <option value="">December</option>
										</select>		
									</div>
									<!-- set more days -->
									<div class="col-md-4">
										<select class="form-control">
										  <option value="">1</option>
										  <option value="">2</option>
										  <option value="">3</option>
										  <option value="">4</option>
										  <option value="">5</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
							  <label for="trailer_owner">owner</label>
							  <select class="form-control">
								  <option value="">Jason Statham</option>
								  <option value="">Tommy</option>
								  <option value="">Boris Britva</option>
								</select>
							</div>
							<div class="form-group">
							  <label for="trailer_trl">trl #</label>
							  <select class="form-control">
								  <option value="">1202</option>
								  <option value="">Tommy</option>
								  <option value="">Boris Britva</option>
								</select>
							</div>
							<div class="form-group">
							  <label for="trailer_driver">driver</label>
							  <select class="form-control">
								  <option value="">Jason Statham</option>
								  <option value="">Tommy</option>
								  <option value="">Boris Britva</option>
								</select>
							</div>
							<div class="form-group">
							  <label for="trailer_dispatcher">dispatcher</label>
							  <select class="form-control">
								  <option value="">Jason Statham</option>
								  <option value="">Tommy</option>
								  <option value="">Boris Britva</option>
								</select>
							</div>
							<div class="form-group">
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
		<li class="active">
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
				<h2 class="admin_title">truck</h2>
				<button type="button" class="_btn add_new" data-toggle="modal" data-target="#truckModal">
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
						<th colspan="2"># ID</th>
						<th>License plate</th>
						<th>Make</th>
						<th>Year</th>
						<th>Color</th>
						<th>VIN</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="10">
							<a href="javascript:;" class="_btn edit">
								<i class="icon-params"></i>
							</a>
						</td>
						<td>59</td>
						<td>1202</td>
						<td>Some</td>
						<td>2000</td>
						<td>pink</td>
						<td>1234567890ABCDEFG</td>
					</tr>
					<tr>
						<td>
							<a href="javascript:;" class="_btn edit">
								<i class="icon-params"></i>
							</a>
						</td>
						<td>60</td>
						<td>1203</td>
						<td>Some1</td>
						<td>2001</td>
						<td>red</td>
						<td>1234567890ABCDEFGaaaa</td>
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

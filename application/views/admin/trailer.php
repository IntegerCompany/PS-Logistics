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
<div class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
							  <label for="trailer_id">trailer #</label>
							  <input type="text" class="form-control" id="trailer_id">
							</div>
							<div class="form-group">
							  <label for="trailer_license_plate">license plate</label>
							  <input type="text" class="form-control" id="trailer_license_plate">
							</div>
							<div class="form-group">
								<label for="trailer_license_plate_exp">exp. license plate</label>
								<div class="row">
									<div class="col-md-4">
										<select class="form-control" id="trailer_license_plate_exp">
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
							  <label for="trailer_make">make</label>
							  <input type="text" class="form-control" id="trailer_make">
							</div>
							<!-- make more years... -->
							<div class="form-group">
							  <label for="trailer_year">year</label>
							  <select class="form-control" id="trailer_year">
							    <option value="">1990</option>
							    <option value="">1991</option>
							    <option value="">1992</option>
							    <option value="">1993</option>
							    <option value="">1994</option>
							  </select>
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
		<li class="active">
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
				<h2 class="admin_title">trailer</h2>
				<button type="button" class="_btn add_new" data-toggle="modal" data-target="#trailerModal">
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
						<th>License plate</th>
						<th>Make</th>
						<th>Year</th>
						<th>VIN</th>
						<th colspan="2">Settings</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1202</td>
						<td>Some</td>
						<td>2000</td>
						<td>1234567890ABCDEFG</td>
						<td class="td-icon-width">
							<a href="javascript:void(0);" class="edit-icon" title="edit">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
						<td class="td-icon-width">
							<a href="javascript:void(0);" class="edit-icon" title="history" >
								<i class="fa fa-history"></i>
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

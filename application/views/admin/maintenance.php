<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PS Logistics LLC</title>
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/css/application.css">
	<link rel="stylesheet" href="/public/css/admin_theme.css">
	<link rel="stylesheet" href="/public/css/repair-history.css">
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
	<img src="/public/img/logo.png" class="img-responsive nav_logo" alt="">
	<ul>
		<!-- add class .active to LI when this page active -->
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				map
			</a>
		</li>
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				shipping
			</a>
		</li>
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				stuff
			</a>
		</li>
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				trucks
			</a>
		</li>
		<li class="active">
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				trailers
				</a>
		</li>
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				brokers
			</a>
		</li>
		<li>
			<a href="javascript:;">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				phone search
			</a>
		</li>
	</ul>
	<div class="controls">
		<a href="javascript:;" class="logout col-md-6 col-xs-12">logout</a>
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
				<h2 class="admin_title">REPAIR HISTORY</h2>
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

			<h1>TRUCK/TRAILER OWNER</h1>
    
    <!--acardion --> 
	        <section class="history-content">
	            <h4>Date: 12/12/1215</h4>
	            <table class="global_table table table-bordered">
					<thead>
						<tr>
							<th class="company-name">Company Name</th>
						 	<th class="description">Description</th>
						 	<th >Upload Files</th>
						 </tr>
					</thead>
					<tbody>
						<tr>
						 	<td>ARCADA</td>
							<td>Hello </td>
							<td><input type="file" name="img" accept="image/*" multiple></td>
						</tr>
					</tbody>
				</table>
	            <h4>Date: 11/12/1215</h4>
	            	<table class="global_table table table-bordered">
						<thead>
							<tr>
								<th class="company-name">Company Name</th>
						 		<th class="description">Description</th>
						 		<th >Upload Files</th>
						 	</tr>
						</thead>
						<tbody>
						   <tr>
						 		<td>ARCADA</td>
								<td>Hello </td>
								<td><input type="file" name="img" accept="image/*" multiple></td>
						 	</tr>
						</tbody>
					</table>
					<h4>Date: 13/12/1215</h4>
	            	<table class="global_table table table-bordered">
						<thead>
							<tr>
								<th class="company-name">Company Name</th>
						 		<th class="description">Description</th>
						 		<th >Upload Files</th>
						 	</tr>
						</thead>
						<tbody>
						   <tr>
						 		<td>ARCADA</td>
								<td>Hello </td>
								<td>
									<input type="file" name="img" accept="image/*" multiple id="myFile" class="demoInputBox"><span id="file_error"></span>
								</td>
						 	</tr>
						</tbody>
					</table>
	        </section>
		</div>
	</div>
</div>

</body>
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>	
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>	
<script type="text/javascript" src="/public/js/core.js"></script>
<script>
	(function($){
			$(document).ready(function() {
            $("h4").click(function() {
                    var $this = $(this);
                    $this
                        .next("table")
                        .slideToggle("fast")
                        .siblings("table:visible")
                        .slideUp("fast");
                    $this.toggleClass("active");
                })
        });
			$('#myFile').bind('change', function() {
				var l = this.files.length;
				console.log(l);
			for( var i =0;  i<l; i++){
				if(this.files[i].size < 5242880) {
						$(this).after('<span>'+this.files[i].name+'</span>');
					$(".demoInputBox").css("border-color","#FF0000");
					$("#file_error").html("File size is greater than 2MB");
					
				}
			 		
			  	$(".demoInputBox").css("border-color","#0FF000");
					
			  	}
			});

	})(window.jQuery)
</script>
</body>
</html>

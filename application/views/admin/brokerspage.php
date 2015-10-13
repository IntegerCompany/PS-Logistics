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
		<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h3 id="addStuffLabel" class="text-center">Add new Broker</h3>
        </div>
       	<div class="modal-body">
      		<div class="container-fluid">
				<form class="form global_form brokers-form">
					<div class="col-md-6 form-group"></div>
					<div class="col-md-6 form-group brokers-rate">
						<label for="broker_rate">Rate 1,2,3,4,5... 
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</label>
						<!-- <input type="text" class="form-control" name="broker_adress" placeholder="Address"> -->
					</div>
					<div class="col-md-6 form-group">
        	            <label for="name">Name Brokers Company</label>
            	        <input name="name" class="form-control" data-valid="required-text" placeholder="Name Brokers Company" type="text"
                           required autocomplete="off">
                	</div>
                	<div class="col-md-6 form-group">
                    	<label from="mc">MC</label>
                    	<input name="mc" class="form-control" data-valid placeholder="MC" type="text" autocomplete="off">
                	</div>
					<div class="col-md-12 form-group">
						<label for="adress">adress</label>
						<input type="text" class="form-control" name="adress" placeholder="Address">
					</div>
					<div class="col-md-6 form-group">
			   		    <label for="city">city</label>
						<input type="text" class="form-control" name="city" placeholder="City">
					</div>
					<div class="col-md-6 form-group">
			  		    <label for="state">state</label>
						<input name="state" class="form-control" placeholder="State" type="text" autocomplete="off" data-valid>
					</div>
					<div class="col-md-6 form-group">
						<label for="zip">zip</label>
				  	    <input type="text" class="form-control" name="zip" placeholder="Zip code">
					</div>
					<div class="col-md-6 form-group">
                    	<label from="phone">Main Phone</label>
                    	<input name="phone" class="form-control" placeholder="Phone" type="text" autocomplete="off" data-valid>
                	</div>
					<div class="col-md-6 form-group">
			 		    <label for="payment_type">payment type</label>
						<select class="form-control" name="payment_type">
						  	<option>Factoring</option>
						    <option>QP</option>
						    <option>Direct</option>
						</select>
					</div>
					<div class="col-md-6 form-group">
					    <label for="payment_form">payment form</label>
						<select class="form-control" name="payment_form">
						    <option>ACH</option>
						    <option>Check /M</option>
						    <option>Comcheck</option>
						    <option>T-Check</option>
						    <option>EFS-Check</option>
					    </select>
					</div>
					<div class="col-md-6 form-group">
					    <label for="interest">interest</label>
						<input type="text" class="form-control" name="interest" placeholder="Interest...">
					</div>
					<div class="col-md-6 form-group">
						<label for="notes">notes</label>
						<textarea class="form-control" rows="1" namer="notes" placeholder="Notes..."></textarea>
					</div>
					<div class="col-md-12 form-group">
						<button type="submit" class="_btn add_new">Submit</button>
						<button type="submit" class="_btn delete">Discard</button>
					</div>
				</form>
	      </div>
      </div>
    </div>
  </div>
</div>

<div id="navigation">
	<a href="/"><img src="/public/img/logo.png" class="img-responsive nav_logo" alt=""></a>
	<ul>

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
			<a href="/maintenance">
				<i class="icon-pin67"></i>
				<i class="icon-locator"></i>
				maintenance
			</a>
		</li>
	</ul>
	<div class="controls">
		<a href="/logout" class="logout col-md-6 col-xs-12">logout</a>
		<a href="javascript:void(0);" class="change_pass col-md-6 col-xs-12">change pass</a>
	</div>
</div>
<div id="content">
	<div class="row">
		<div class="container-fluid">

			<div class="admin_top">
				<a class="visible-xs visible-sm toggle_menu" href="javascript:void(0);">
					toggle
				</a>
				<h2 class="admin_title">Brokers List</h2>
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
						<th>Phone</th>
						<th>Email</th>
						<th>Rate</th>
						<th colspan="2">Settings</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Jason Statham
						</td>
						<td>
							999-999-9999
						</td>
						<td>
							JasonStatham@gmail.com
						</td>
						<td>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</td>
						<td class="td-icon-width">
							<a href="javascript:void(0);" class="edit-icon" title="edit">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
						<td class="td-icon-width">
							<a href="javascript:void(0);" class="edit-icon" title="edit">
								<i class="fa fa-trash-o"></i>
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

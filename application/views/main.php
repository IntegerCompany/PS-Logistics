<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PS Logistics LLC</title>
	<link rel="stylesheet" href="<?php echo URL::base(); ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL::base(); ?>public/css/application.css">
	<link rel="stylesheet" href="<?php echo URL::base(); ?>public/css/homepage.css">
</head>
<body>
<?php //print_r(Model::factory('Users')->check_user(array('login' => 'admin','password'=>"12345" )))?>
<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="container-fluid">
      		<div class="col-md-8 col-md-offset-2 auth-value">
		      	<form action="">
			    		<div class="form-group">
			  		    <label for="pop_user_login" class="pop_label">Login</label>
			  		    <input type="email" class="form-control" id="login" placeholder="">
			  		  </div>
			  		  <div class="form-group">
			  		    <label for="pop_user_password" class="pop_label">Password</label>
			  		    <input type="password" class="form-control" id="password" placeholder="">
			  		  </div>
			      	<div class="checkbox">
			          <label>
			            <input type="checkbox"> Keep me in
			          </label>
			        </div>
		        </form>
		        <div class="pop_buttons_wrapper">
			        <button type="button" class="button" id="loginin">Login</button>
			        <button type="button" class="button" data-dismiss="modal">Close</button>
		        </div>
	        </div>
	      </div>
      </div>
    </div>
  </div>
</div>

<!-- mainpage header -->
<header id="header">
	<?php if(!Session::instance()->get('user')){?>
	<button type="button" class="button login" data-toggle="modal" data-target="#loginModal">
	  login
	</button>
	<?php } else {?>
	<a role="button" class="button login" href="/shipping">
		admin
	</a>
	<?php } ?>
</header>

<!-- top section img -->
<section class="mainpage_top_img clearfix">
	<h1 class="animated">
		PS Logistics LLC <br/>
		<span>IN TIME EVERY TIME</span>
	</h1>
</section>

<!-- section about -->
<section class="mainpage_about">
	<div class="container">
		<div class="col-md-12">
			<h2 class="h2_title">
				transporting everything, everywhere
			</h2>
			<p>
				We are <b>PS Logistics LLC</b> - a company, what based in USA and abroad that helps the individuals looking for transport easier. <br><br>
				Our company offers wide arrays of logistic related services, such as truckload and LTL transportation, expedited service, intermodal transport and airfreight service.
			</p>
			<div class="row">
				<hr>
				<div class="col-sm-3">
					<b>MC</b>	
					<br>775545
				</div>
				<div class="col-sm-3">
					<b>US DOT</b>
					<br>2271064
				</div>
				<div class="col-sm-3">
					<b>Insurance Carrier</b>
					<br>National Risk Management
				</div>
				<div class="col-sm-3">
					<b>Insurance Policy</b>	
					<br>08470907-0
				</div>
			</div>
		</div>
	</div>
</section>

<!-- section refference -->
<section class="mainpage_reference">
	<div class="container">
		<div class="col-md-12">
			<h2 class="h2_title">
				references
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam commodi nesciunt ut suscipit quam eos, sint minus ex! Incidunt, unde ex maxime atque quasi quis, ipsam! Saepe magnam corporis in.
			</p>
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<b>Recon Logistics,	Ken Met</b> 
					<br>
					440-7008-0408
				</div>
				<div class="col-sm-4">
					<b>Coyote Logistics, John Ratliff</b>	
					<br>
					847-810-6084
				</div>
				<div class="col-sm-4">
					<b>Greatwide Truckload Management, Buddy</b>	
					<br>
					740-587-7713
				</div>
			</div>
		</div>
	</div>
</section>

<!-- section contacts -->
<section class="mainpage_contacts">
	<div class="container">
		<div class="col-md-12">
			<h2 class="h2_title">contacts</h2>
			<p>
				We have provided a list of contact names and email address to the right for your assistance in contacting the right person for your questions. Give us a call or email us today. Whatever your needs, we’re ready to shift into gear.
			</p>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p>
						Phone: 440-505-0520 <br>
						After Hours Phone: 440-584-0080 <br>
						Fax: 888-979-8187 <br>
						<a href="mailto:pslogisticsllc@gmail.com">pslogisticsllc@gmail.com</a>
					</p>		
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- footer -->
<footer id="footer">
	All Rights Reserved &copy; PS Logistics LLC. Privacy Policy
</footer>

<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script> -->
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/core.js"></script>
<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/main.js"></script>
<script>
	// $(function(){
	//     $('body').slimScroll({
	//         height: '100%',
	//         alwaysVisible: false
	//     });
	// });
</script>
</body>
</html>
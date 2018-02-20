<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	<style type="text/css">
			.navbar-default {
    background-color: #67D3F9;
    border-color: #67D3F9;
}
.navbar-default .navbar-nav > li > a {
	font-size: 1.2em;
	font-weight: bold;
    color: #67D3F9;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    background-color: #67D3F9;
    color: #1C1698;
}
		</style>
	</head>
	<?php include_once("profile.php"); ?>

	<?php 
		if(!isset($_SESSION["uid"]) || empty($_SESSION["uid"]))
		{
			header("location:index.php");
		}

		if(isset($_POST['submit'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$pcode = $_POST['pcode'];
			$state = $_POST['state'];
			$country = $_POST['country'];

			$sql = "UPDATE register SET name='".$fname."',lname='".$lname."',email='".$email."',mobile='".$mobile."',address='".$address."',city='".$city."',post_code='".$pcode."',state='".$state."',country='".$country."'";
			$res = $mysqli->query($sql);

				if(!$res)
				{
					echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
				}
				else
				{
					header("location:myprofile.php");
					echo '<p class="alert alert-success">Profile Updated</p>';
				}
		}
	?>
	
    <body>		
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
				<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" style="width:120px; height: 37px" class="site_logo" alt=""></a>				
					<div class="navbar-default navbar-nav" style="background-color: #67D3F9; padding-left: 150px">
  
      					<ul class="nav navbar-nav">
      						
							<li><a href="index.php">Home</a></li>
					        <li><a href="Trending1.php">Trending</a></li>
					        
					        <li><a href="Women Products.php">Womens Special</a></li>
					        <li><a href="Man Products.php">Men's wear</a></li>
					        <li><a href="contact.php">Contact</a></li>
					    </ul>
					    <ul class="nav navbar-nav pull-right">
							<?php
								if(!isset($_SESSION["uid"]))
								{
									echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>My Account</a></li>';
								}
								else
								{
									echo '<li class="active"><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span>'.$row['name'].'</a></li>';
								}
							?>
							<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>My Cart</a></li>
							
							<?php
								if(!isset($_SESSION["uid"]))
								{					
									echo '<li><a href="register.php">Login</a></li>';
								}
								else
								{
									echo '<li><a href="logout.php">Logout</a></li>';
								}
							?>
						</ul>
					
					</nav>
				</div>
			</section>
    
		<div id="wrapper" class="container">
			<section class="main-content">				
					<div class="row">
						<div class="span9">					
							<h4 class="title"><span class="text"><strong>Hello</strong> <?php echo $row['name'] ?></span></h4>
						<form action="myprofile.php" method="post">
							<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" name="fname" placeholder="" class="input-xlarge" value="<?php echo $row['name']; ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" name="lname" placeholder="" class="input-xlarge" value="<?php echo $row['lname']; ?>">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" name="email" placeholder="" class="input-xlarge" value="<?php echo $uid; ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" name="mobile" placeholder="" class="input-xlarge" value="<?php echo $row['mobile'] ?>">
													</div>
												</div>
												
											</div>
											<div class="span6">
												<h4>Your Address</h4>
															  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address:</label>
													<div class="controls">
														<input type="text" name="address" placeholder="" class="input-xlarge" value="<?php echo $row['address']; ?>">
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" name="city" placeholder="" class="input-xlarge" value="<?php echo $row['city']; ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" name="pcode" placeholder="" class="input-xlarge" value="<?php echo $row['post_code']; ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> State:</label>
													<div class="controls">
														<input type="text" name="state" placeholder="" class="input-xlarge" value="<?php echo $row['state']; ?>">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Country:</label>
													<div class="controls">
														<input type="text" name="country" placeholder="" class="input-xlarge" value="<?php echo $row['country']; ?>">
													</div>
												</div>
												
											</div>
											<button name="submit" class="btn btn-inverse">Confirm order</button>
										</div>
							</form>
					</div>
				</div>
			</section>
			<section id="footer-bar">
						<nav class="navbar">
						<ul class="nav navbar-nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>							
						</ul></nav>					
									
					
			</section>
			<section id="copyright">
				<span>Copyright 2017 All right reserved.</span>
			</section>
		</div>
</body>
</html>
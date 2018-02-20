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
					        <li class="active"><a href="contact.php">Contact</a></li>
					    </ul>
					    <ul class="nav navbar-nav pull-right">
							<?php
								if(!isset($_SESSION["uid"]))
								{
									echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>My Account</a></li>';
								}
								else
								{
									echo '<li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span>'.$row['name'].'</a></li>';
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
			<section class="google_map">
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.3567558323784!2d72.97819891446976!3d19.17961418702854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8da6ab36419%3A0xcd31c187fe793388!2sKC+College+Ground!5e0!3m2!1sen!2sin!4v1509275173055" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>
			<section class="header_text sub">
			
				<h4><span>Contact Us</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>ADDITIONAL INFORMATION</h5>
							<p><strong>Phone:</strong>&nbsp;(123) 456-7890<br>
							<strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>
							<strong>Email:</strong>&nbsp;<a href="#">vietcuong_it@yahoo.com</a>								
							</p>
							<br/>
							<h5>SECONDARY OFFICE IN VIETNAM</h5>
							<p><strong>Phone:</strong>&nbsp;(113) 023-1125<br>
							<strong>Fax:</strong>&nbsp;+04 (113) 023-1145<br>
							<strong>Email:</strong>&nbsp;<a href="#">vietcuong_it@yahoo.com</a>					
							</p>
						</div>
					</div>
					<div class="span7">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<form method="post" action="#">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
								</div>
							</fieldset>
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
			</section>		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>
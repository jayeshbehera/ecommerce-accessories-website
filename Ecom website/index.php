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
		<script src="bootstrap/js/addToCart.js"></script>				
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
      						
							<li class="active"><a href="index.php">Home</a></li>
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
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="slider1.png" alt="" />
						</li>
						<li>
							<img src="slider3.png" alt="" />
						</li>
						<li>
							<img src="slider2.png" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
														$sql="SELECT  * FROM  products where slider_active=1 and ptype='Latest'";
														if ($result = $mysqli->query($sql)) {
															while ($row = $result->fetch_row()) 
															{
																$pid = $row[0];
																echo '<li class="span3">';
																
																echo	'<p><a href="product_detail.php?pid='.$pid.'"><center><img src='.$row[3].' style="height:300px" alt="" /></a></p>';
																echo	'<div style="height:120px" class="product-box">
																			<span class="sale_tag"></span>';
																echo	'<a href="product_detail.php?pid='.$pid.'" class="title">'.$row[1].'</a><br/>';
																echo	'<a href="products.php" class="category">'.$row[1].'</a>';
																echo	'<p class="price">Rs. '.$row[2].'</p>
																		</div>
																	</li>';
															}
															$result->close();
														}
													}
												?>
												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
														$sql="SELECT  * FROM  products where slider_active=2 and ptype='Latest'";
														if ($result = $mysqli->query($sql)) {
															while ($row = $result->fetch_row()) 
															{
																$pid = $row[0];
																echo '<li class="span3">';
																
																echo	'<p><a href="product_detail.php?pid='.$pid.'"><img src='.$row[3].' style="height:300px" alt="" /></a></p>';
																echo	'<div style="height:120px" class="product-box">
																			<span class="sale_tag"></span>';
																echo	'<a href="product_detail.php?pid='.$pid.'" class="title">'.$row[1].'</a><br/>';
																echo	'<a href="products.php" class="category">'.$row[1].'</a>';
																echo	'<p class="price">Rs. '.$row[2].'</p>
																		</div>
																	</li>';
															}
															$result->close();
														}
													}
												?>																																
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
														$sql="SELECT  * FROM  products where slider_active=1 and ptype='man'";
														if ($result = $mysqli->query($sql)) {
															while ($row = $result->fetch_row()) 
															{
																$pid = $row[0];
																echo '<li class="span3">';
																
																echo	'<p><a href="product_detail.php?pid='.$pid.'"><img src='.$row[3].' style="height:300px" alt="" /></a></p>';
																echo	'<div style="height:120px" class="product-box">
																			<span class="sale_tag"></span>';
																echo	'<a href="product_detail.php?pid='.$pid.'" class="title">'.$row[1].'</a><br/>';
																echo	'<a href="products.php" class="category">'.$row[1].'</a>';
																echo	'<p class="price">Rs. '.$row[2].'</p>
																		</div>
																	</li>';
															}
															$result->close();
														}
													}
												?>	
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
														$sql="SELECT  * FROM  products where slider_active=2 and ptype='women'";
														if ($result = $mysqli->query($sql)) {
															while ($row = $result->fetch_row()) 
															{
																$pid = $row[0];
																echo '<li class="span3">';
																
																echo	'<p><a href="product_detail.php?pid='.$pid.'"><img src='.$row[3].' style="height:300px" alt="" /></a></p>';
																echo	'<div style="height:120px" class="product-box">
																			<span class="sale_tag"></span>';
																echo	'<a href="product_detail.php?pid='.$pid.'" class="title">'.$row[1].'</a><br/>';
																echo	'<a href="products.php" class="category">'.$row[1].'</a>';
																echo	'<p class="price">Rs. '.$row[2].'</p>
																		</div>
																	</li>';
															}
															$result->close();
														}
													}
												?>																																		
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
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
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
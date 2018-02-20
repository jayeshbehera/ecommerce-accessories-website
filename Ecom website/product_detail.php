
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
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/addToCart.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
			<section class="header_text sub">
			
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<?php
								if(isset($_GET["pid"]))
								{
									$pid = $_GET["pid"];
									$sql="SELECT  * FROM  products WHERE pid='$pid' ";
									if ($result = $mysqli->query($sql)) {
										while ($row = $result->fetch_row()) 
										{
											echo '<a href='.$row[3].' class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src='.$row[3].'></a>												
												<ul class="thumbnails small">								
													<li class="span1">
														<a href="ac201.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img style="height:50px; width:50px" src="ac201.jpg" alt=""></a>
													</li>								
													<li class="span1">
														<a href="acc11.png" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img style="height:50px; width:50px" src="acc11.png" alt=""></a>
													</li>													
													<li class="span1">
														<a href="acc21.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img style="height:50px; width:50px" src="acc21.jpg" alt=""></a>
													</li>
													<li class="span1">
														<a href="acc31.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img style="height:50px; width:50px" src="acc31.jpg" alt=""></a>
													</li>
												</ul>';

							echo '</div>
									<div class="span5">
										<address>
											<strong>Brand:</strong> <span>'.$row[1].'</span><br>';
							echo			'<strong>Product Code:</strong> <span>'.$row[0].'</span><br>';
																			
							echo		'</address>									
										<h4><strong>Price: RS. '.$row[2].'</strong></h4>';
							echo    '</div>';
									}
								}
							}
							?>
							<div class="span5">
								<form class="form-inline">
									<label class="checkbox">
										<input type="checkbox" value=""> Option one is this and that
									</label>
									<br/>
									<label class="checkbox">
									  <input type="checkbox" value=""> Be sure to include why it's great
									</label>
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="number" class="span1" name="qty" placeholder="1">
							<?php echo	"<div class='btn btn-inverse' onclick='addToCart(\"$pid\")'>Add to cart</div>"; ?>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
													$sql="SELECT  * FROM  products order by pid DESC limit 3";
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
											<ul class="thumbnails listing-products">
												<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
													$sql="SELECT  * FROM  products ORDER BY pid ASC limit 3";
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
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>
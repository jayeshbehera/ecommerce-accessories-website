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
			<script src="themes/js/respond.min.js"></script>
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

	<?php $msg=''; ?>
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
							<li class="active"s><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>My Cart</a></li>
							
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
			
				<h4><span>Shopping Cart</span></h4>
			</section>
			<?php echo $msg; ?>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th style="text-align: center; vertical-align: middle;">Remove</th>
									<th style="text-align: center; vertical-align: middle;">Image</th>
									<th style="text-align: center; vertical-align: middle;">Product Name</th>
									<th style="text-align: center; vertical-align: middle;">Quantity</th>
									<th style="text-align: center; vertical-align: middle;">Unit Price + Tax</th>
									<th style="text-align: center; vertical-align: middle;">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php			
							if(!isset($_SESSION["uid"]) || empty($_SESSION["uid"]))
							{
								header("location:index.php");
							}
							
							$grandtotal=0;
							$totalproducts=0;
							$min=0;
							$gstp=0;
							$totalwithgst=0;
							$totgst = 0;
							$minpname="";
							for($i=1;$i<=5;$i++)
							{
								if($row["cart$i"]!="")
								{
									$sql="SELECT  * FROM  products WHERE pid='".$row["cart$i"]."'";
									$res =$mysqli->query($sql);
									
									if($res->num_rows==1)
									{
										global $prow;
										$prow=$res->fetch_assoc();
									}
									$grandtotal += $prow["pprice"];
									
									$totalproducts++;
									if($prow["pprice"]<$min||$min==0)
									{
										$min=$prow["pprice"];
										$minpname=$prow["pname"];
									}
									$gstp = ($prow["pprice"]*18)/100;
									$totgst += $gstp;
									$totalwithgst += $prow["pprice"]+$gstp;
									echo '<tr>';
									echo '<td style="text-align: center; vertical-align: middle;"><button type="checkbox" value="'.$row["cart$i"].'" onclick="removeItem('.$row["cart$i"].')">Remove</button></td>';
									echo '<td style="text-align: center; vertical-align: middle;"><bu><a href="product_detail.php"><img alt="" src="'.$prow["pimage"].'"></a></td>';
									echo '<td style="text-align: center; vertical-align: middle;"><bu>'.$prow["pname"].'</td>';
									echo '<td style="text-align: center; vertical-align: middle;"><bu><input type="text" placeholder="1" class="input-mini"></td>';
									echo '<td style="text-align: center; vertical-align: middle;"><bu>'.$prow["pprice"].' + '.$gstp.'</td>';
									echo '<td style="text-align: center; vertical-align: middle;"><bus>Rs. '.($prow["pprice"]+$gstp).'</td>';
									echo '</tr>';

								}
							}
							?>

							</tbody>
						</table>
						
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:<?php echo $grandtotal; ?><br>
							<strong>GST (18%)</strong>:<?php echo $totgst; ?><br>
							<strong>Total</strong>:<?php echo $grandtotal+$totgst; ?><br>
						</p>
						<hr/>
						<?php 
							if(!isset($_SESSION["uid"]) || empty($_SESSION["uid"]))
							{
								header("location:index.php");
							}

							

								if(isset($_POST["purchased"])){
									
									$addr = $_POST['address'];
									for($i=1;$i<=5;$i++)
									{
										if($row["cart$i"]!="")
										{
											$bal = $row['balance'];
											$chkbal = $grandtotal+$totgst;
											if($bal <= $chkbal){ ?>
											<?php echo	$msg = '<p class="alert alert-warning">Your balance is low. Please recharge it</p>'; ?> 
											<?php
											} else {
											$total = $prow["pprice"]+$gstp;
											$prid = $row["cart$i"];
											$sql = "INSERT INTO `purchase` (`pid`,`email`,`delivery_addr`,`amount`,`order_status`)VALUES ($prid,'$uid','$addr',$total,'Order Placed')";
											$result = $mysqli->query($sql);
											if(!$result){
												echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
											} else {
												
												$bal -= ($prow["pprice"]+$gstp);
												$sql="UPDATE register SET cart$i='', balance=".$bal." WHERE email='" . $row["email"] . "'";
												$res =$mysqli->query($sql);

												echo "<script>alert('Order had been placed');</script>";
											}
										}

										}
									}

													
													
							}
						?>

						<form method="post">
							<label>Delivery Address: </label>
							<textarea name="address"><?php echo $row['address']; ?></textarea><br>
							<!-- <button name="update_addr" class="btn" type="button">Update Delivery Address</button> -->
							<p class="center">				
								
								<input type="submit" class="btn btn-success" name="purchased" value="Checkout">
							</p>
						</form>					
					</div>
					<div class="span3 col">
						<div class="block pull">	
							<strong><?php echo $row['name']; ?></strong><br>
							<p>Your account balance is Rs. <strong><?php echo $row['balance']; ?></strong></p>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<?php
									include_once("config.php"); 
									$errstatus=0;
									$errmsg="";
									if($errstatus!=1)
									{
										$sql="SELECT  * FROM  products where ptype='Women' and pid=7";
										if ($result = $mysqli->query($sql)) {
											while ($row = $result->fetch_row()) 
											{
												$pid = $row[0];
												echo '<div class="item">
														<ul class="thumbnails listing-products">';
												echo '<li class="span3">';
												echo	'<div class="product-box">
															<span class="sale_tag"></span>';
												echo	'<p><a href="product_detail.php?pid='.$pid.'"><img src='.$row[3].' style="height:300px" alt="" /></a></p>';
												echo	'<a href="product_detail.php?pid='.$pid.'" class="title">'.$row[1].'</a><br/>';
												echo	'<a href="products.php" class="category">'.$row[1].'</a>';
												echo	'<p class="price">Rs. '.$row[2].'</p>
														</div>
													</li>';
												echo '</ul></div>';
											}
											$result->close();
										}
									}
								?>
									</div>
									
											<?php
													include_once("config.php"); 
													$errstatus=0;
													$errmsg="";
													if($errstatus!=1)
													{
														$sql="SELECT  * FROM  products";
														if ($result = $mysqli->query($sql)) {
															while ($row = $result->fetch_row()) 
															{
																$pid = $row[0];
																echo '<div class="item">
																		<ul class="thumbnails listing-products">';
																echo '<li class="span3">';
																echo	'<div class="product-box">
																			<span class="sale_tag"></span>';
																echo	'<p><a href="product_detail.php?pid='.$pid.'"><img src='.$row[3].' style="height:300px" alt="" /></a></p>';
																echo	'<a href="product_detail.php?pid='.$pid.'" class="title">'.$row[1].'</a><br/>';
																echo	'<a href="products.php" class="category">'.$row[1].'</a>';
																echo	'<p class="price">Rs. '.$row[2].'</p>
																		</div>
																	</li>';
																echo '</ul></div>';
															}
															$result->close();
														}
													}
												?>
										
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
			// $(document).ready(function() {
			// 	$('#checkout').click(function (e) {
			// 		document.location.href = "checkout.php";
			// 	})
			// });

			function removeItem(x){
				var del = confirm("Delete:"+x);
				if(del == true){
					console.log("Remove"+x);
					location.href = "removeCart.php?pid="+x;
				} else{
					return false;
				}
			}

		</script>		
    </body>
</html>
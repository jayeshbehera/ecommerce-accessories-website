<?php
	include_once("config.php"); 
	session_start();
	$errstatus=0;
	$errmsg="";
	$nullstr="";
	
	if(isset($_SESSION["uid"]) || !empty($_SESSION["uid"]))
	{
		$uid = $_SESSION['uid'];
		if($errstatus!=1)
		{
			$sql="SELECT  * FROM  register WHERE email='$uid'";
			$res =$mysqli->query($sql);
			
			if($res->num_rows==1) 	// Fetching row if that user exist
			{
				global $row;
				$row=$res->fetch_assoc();
			}
		}

		for($i=1;$i<=5;$i++)
		{
			if($row["cart$i"]==$_GET["pid"])
			{
				echo "Product already added to cart";
				break;
			}
			
			if($row["cart$i"]=="")
			{
				$sql="UPDATE register SET cart$i='".$_GET["pid"]."' WHERE email='".$row["email"]."';";
				$res =$mysqli->query($sql);
				echo "Product added";
				break;
			}
		}
		if($i==6)
			echo "You cannot add more than 10 products in cart";
	}
	else
	{
		echo "Please login before adding products in cart";
	}
?>
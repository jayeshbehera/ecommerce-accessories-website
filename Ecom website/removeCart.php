<?php
	include_once('profile.php');
	
	$email = $_SESSION['uid'];
	
	for($i=1;$i<=5;$i++){
		
		$cart=$row["cart$i"];
		$pid = $_GET['pid'];
		if($cart == $pid){
			$sql = "UPDATE register SET cart$i=NULL WHERE email = '".$email."' and cart$i=".$pid;
			$res = $mysqli->query($sql);
			if($res){
				header('Location: cart.php');
			} else {
				echo $sql.'<br>';
				echo mysqli_error($mysqli);
			}
			
		}
		
	}
?>
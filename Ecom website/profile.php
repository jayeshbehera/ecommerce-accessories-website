<?php
include_once("config.php"); 
session_start();
if(isset($_SESSION["uid"]) || !empty($_SESSION["uid"]))
{
	global $row;
	$errstatus=0;
	$errmsg="";
	$uid = $_SESSION['uid'];
	if($errstatus!=1)
	{
		$sql="SELECT  * FROM  register WHERE email='$uid'";
		$res =$mysqli->query($sql);
		if(!$res)
		{
			echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
			die();
		}
			
		if($res->num_rows==1) 	// Fetching row if that user exist
		{
			
			$row=$res->fetch_assoc();
		}
	}
	$cartitems=0;
	for($i=1;$i<=5;$i++)
	{
		if($row["cart$i"]!="")
			$cartitems++;
	}
}
?>
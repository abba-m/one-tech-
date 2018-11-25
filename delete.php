<?php
session_start();

include 'includes/authentication.php';
include 'includes/db_connect.php';

if ($_GET['ref'])
	{
	 $cart_id = $_GET['ref'];
	 $article_delete = mysqli_query($dbC, "DELETE FROM cart WHERE cart_id = '$cart_id' ");
	 
		 if ($article_delete) 	
		 {
			 
			 header('location:cart.php?success=1');
			 //echo 'Delete Successful';
		 }
		 else
		 {
			 header('location:cart.php?success=0');
			 
		 }
	}

?>
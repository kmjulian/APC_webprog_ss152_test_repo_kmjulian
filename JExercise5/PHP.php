	<?php
	include_once 'dbconfig.php';
	// delete condition
	if(isset($_GET['delete_id']))
{
	 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
	 mysqli_query($con,$sql_query);
	}
	// delete condition
	?>
	<html>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			MAJESTIC
		</title>
		<style>
		body {
			background-image: url("Background.jpg");
			background-repeat: no repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: 1600px 900px;
		}
		h1 {
			color: #800000;
			text-align: center;
			font-family: "Arial Black", Gadget, sans-serif;
			font-size: 50px;
			padding-top: 20px;
			margin-bottom:0.1em;
		}
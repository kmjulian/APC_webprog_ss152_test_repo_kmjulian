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
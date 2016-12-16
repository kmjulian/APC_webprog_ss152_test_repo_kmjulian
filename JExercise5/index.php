<?php
include_once 'dbconfig.php';
// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Excercise 5
	</title>
  <style>
    body {
      background-image: url("Background.jpg");
      background-repeat: no repeat;
      background-attachment: fixed;
      background-position: center;
      background-size: 1600px 900px;
      position:absolute;
    }
    h1 {
      color: #800000;
      text-align: center;
      font-family: "Arial Black", Gadget, sans-serif;
      font-size: 50px;
      padding-top: 20px;
    }
    a:link {
      color: #800000;
      background-color:transparent;
      text-decoration: none;
      font-family: "Lucida Console", Monaco, monospace;
      font-size: 20px;
    }
    a:hover {
      color: black;
      background-color:transparent;
      text-decoration: none;
      font-family: "Lucida Console", Monaco, monospace;
      font-size: 20px;
    }
    a:visited {
      color: #800000;
      background-color:transparent;
      text-decoration: none;
      font-family: "Lucida Console", Monaco, monospace;
      font-size:20px;
    }
    a:active {
      color:black;
      background-color: transparent;
      text-decoration: none;
      font-family: "Lucida Console", Monaco, monospace;
      font-size:20px;
    }
    img {
      text-align:center;
    }
    p{
			text-align: center;
			font-size: 20;
		}
		table {
			font-family: quicksand;
			width: 100%;
			font-size: 25;
			padding-left: 70;
			padding-right: 70;
		}
		th{
			background:#FFD1DC;
		}
		td, th {
			border: 3px solid #000000;
			text-align: left;
			padding: 10px;
		}
		td{
			background-color: rgba(255,255,255,.5);
		}
    .error {
      color: #FF0000;
    }
  </style>
	<script type="text/javascript">
		function edt_id(id)
		{
		 if(confirm('Edit this entry?'))
		 {
		  window.location.href='edit.php?edit_id='+id;
		 }
		}
		function delete_id(id)
		{
		 if(confirm('Delete this entry?'))
		 {
		  window.location.href='index.php?delete_id='+id;
		 }
		}
	</script>
  	<body>
      <head>
  		<div style="padding-left:520px; padding-right:500px; padding-top: 250px">
  		<img src="vic.png" alt="Signature Fonts" style="padding-top:7%"></a>
  		</div>
  		</head>
  		<br>
  		<div style = "background:#FBE7DC;">
  		<center>
  		<hr>
  			<a href="homec.php" targetsel>HOME &nbsp;
  			<a href="aboutc.php" targetsel>ABOUT &nbsp;
  			<a href="galleryc.php" targetsel>GALLERY &nbsp;
  			<a href="contactc.php" targetsel>CONTACT &nbsp;
  			<a href="trivia.php" targetsel>TRIVIA &nbsp;
        <a href="add.php" targetsel>FORM</a>
  		<hr>

		<h1 style="font-size: 40px;margin-top:25px"> FORM </h1>
		<table cellspacing="7" style="margin-top: -20px">
			<tr><center>
				<th style="font-size:20"><b>Name</b></th>
				<th style="font-size:20"><b>Nickname</b></th>
				<th style="font-size:20"><b>E-mail</th>
				<th style="font-size:20"><b>Home</b></th>
				<th style="font-size:20"><b>Gender</th>
				<th style="font-size:20"><b>Mobile</th>
				<th style="font-size:20"><b>Comment</th>
			</center></tr>
			<?php
				$sql_query="SELECT * FROM users";
				$result_set=mysqli_query($con,$sql_query);
				while($row=mysqli_fetch_row($result_set))
				{
			?>
				<tr>
					<td><b><?php echo $row[2],'</b>, ', $row[1]; ?></td>
					<!-- Name = First Name + Last Name -->
					<td><?php echo $row[3]; ?></td>
					<!-- Nickname -->
					<td><?php echo $row[4]; ?></td>
					<!-- Email -->
					<td><?php echo $row[5]; ?></td>
					<!-- Address -->
					<td><?php echo $row[6]; ?></td>
					<!-- Gender-->
					<td><?php echo $row[7]; ?></td>
					<!-- Mobile -->
					<td><?php echo $row[8]; ?></td>
					<!-- Comment -->
					<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="edit.png" style="width:30px;height:30px" title="edit" align="EDIT"></a></td>
					<td class = "delete" align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="delete.png" style="width:30px;height:30px" title="delete" align="DELETE"></a></td>
				</tr>
			<?php
			}
			?>
			<tr><td style="border:none; background:none">&nbsp;</td></tr>
			<tr>
				<th colspan="9" style="text-align:center" class = "add"><a href="add.php"> add data here </a></th>
			</tr>
		</table>
    <hr>
  	<footer style="margin-bottom:0.2em; margin-top: 0.2em">
  		<p style="padding:2px; border:3px; text-align: center">
  			<img src="5.jpg" style="width:135px;height:135px"><img src="6.jpg" style="width:135px;height:135px"><img src="8.jpg" style="width:135px;height:135px"><img src="9.jpg" style="width:135px;height:135px">
  			<img src="10.jpg" style="width:135px;height:135px"><img src="12.jpg" style="width:135px;height:135px"><img src="13.jpg" style="width:135px;height:135px"><img src="14.jpg" style="width:135px;height:135px">
  		</p>
  	</footer>
  	<hr>
  		<center>
  			<b><p style="color:Black;margin-bottom:0.1em;font-size:25px;font-family:"Arial Black", Gadget, sans-serif;">GET SOCIAL</b></p>
  			<center><p style="margin-top:0.1em;margin-bottom:0.1em"><a href="https://www.facebook.com/kylajuliannn"target="_blank"><img a src="fblogo.png" style="width:50px;height:50px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
  			<a href="https://www.instagram.com/kylajuliannn/?hl=en"target="_blank"><img src="iglogo.png" style="width:50px;height:50px;"></a></center>
  			<p style="font-size:12px;color:Black;font-family"Arial Black", Gadget, sans-serif;margin-top:0.1em"> Copyright 2016 VICTORIOUS. </p>
  		</center>
	</body>
</html>

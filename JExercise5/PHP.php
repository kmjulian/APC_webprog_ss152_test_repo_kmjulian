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
		h2 {
			color: #800000;
			text-align: center;
			font-family: "Arial Black", Gadget, sans-serif;
			font-size: 20px;
			margin-bottom:0.1em;
			margin-top:0.1em;
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
			div.transbox {
				margin: 200px;
				background-color: #ffffff;
				border: 1px solid black;
				opacity: 0.6;
				filter: alpha(opacity=60);
				padding-bottom: 0.5;
			}
			div.transbox p {
				margin: 5%;
				font-weight: bold;
				color: #000000;
			}
			p {
				padding-top: 50px;
			}
			h1 {
				text-align:center; 
				color:black;
			}
			b {
				font-style: strong;
			}
			div {
				text-align:center;
			}
			p {
				text-align: center;
				font-size: 26;
			}
			table {
				font-family: quicksand;
				width: 100%;
				font-size: 25;
				padding-left: 70;
				padding-right: 70;
			}
			th {
				background:#FFD1DC;
			}
			th.add {
				background:#c7b8e4;
			}
			td, th {
				border: 3px solid #000000;
				text-align: left;
				padding: 10px;
			}
			td {
				background-color: rgba(255,255,255,.5);
			}
			hr {
				width: 58%;
				color: black;
			}
			#div-pic {
				width: 120;
				height: 120;
			}
			#normal {
				font-size: 25;
				padding-left:10%;
				padding-right:10%;
			}
			#subcat {
				display:inline-block;
				border:1px;
				padding:5px 0;
			}
			#extramenu {
				width: 100%;
				height: 10%;
			}
			#title {
				font-size: 85;
				height: 40;
				padding: 20;
			}
			#just {
				font-size: 25;
				padding-left:10%;
				padding-right:10%;
				text-align: justify;
			}
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
			}
			
			#div.menu {
				width:465px;
				margin: 0 auto;
				border:1px solid red;
				text-align:center;
			}
			#menu {
				margin: 0 auto;
				text-align: center;
			}
			li {
				float: left;
			}
			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			li.dropdown {
				display: inline-block;
			}
			.dropdown-content {
				display: none;
				position: absolute;
				min-width: 110px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				background-color: rgba(232,232,232,0.9);
			}
			.dropdown-content a {
				color: black;
				margin-top: 2;
				text-decoration: none;
				display: block;
				text-align: center;
			}
			.dropdown-content a:hover {
				color: #660066; 
			}
			.dropdown:hover .dropdown-content { 
				display: block;
			}
			@font-face {
				font-family: quicksand;
				src: url(quicksand_book.otf);
			}
			@font-face {
				font-family: amethyst;
				src: url(shorelines.otf);
			}
		</style>
		<script type="text/javascript">
			function edt_id(id)
			{
			 if(confirm('Sure to edit ?'))
			 {
			  window.location.href='edit.php?edit_id='+id;
			 }
			}
			function delete_id(id)
			{
			 if(confirm('Sure to Delete ?'))
			 {
			  window.location.href='form-home.php?delete_id='+id;
			 }
			}
		</script>
		<body>
		<head>
		<div style="padding-left:520px; padding-right:500px; padding-top: 250px">
			<img src="http://fontmeme.com/embed.php?text=Majestic&name=Walker on the Moon Light.ttf & size=120 & style_color=000000" alt="Calligraphy Fonts" style="padding-top:7%"></a>
		</div>
		</head>
		<br>
		<center>
		<hr>
			<a href="homec.php" targetsel>HOME &nbsp; 
			<a href="aboutc.php" targetsel>ABOUT &nbsp; 
			<a href="galleryc.php" targetsel>GALLERY &nbsp; 
			<a href="contactc.php" targetsel>CONTACT &nbsp;
			<a href="trivia.php" targetsel>TRIVIA</a>
		<hr>
		</center>
		<br>
			<br>
				<br>
					<br>
		<br>
			<br>
				<br>
		<div class="transbox"
		<table align="center" style="font-family:courier; font-size:18px;margin-top:2em;margin-bottom:4em;border:2px">
			<table cellspacing="7" >
				<tr><center>
					<th style="font-size:25"><b>Name</b></th>
					<th style="font-size:25"><b>Nickname</b></th>
					<th style="font-size:25"><b>E-mail</th>
					<th style="font-size:25"><b>Home</b></th>
					<th style="font-size:25"><b>Gender</th>
					<th style="font-size:25"><b>Mobile</th>
					<th style="font-size:25"><b>Comment</th>
					<th style="font-size:25" colspan="2"><b>etc..</b></th>
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
						<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="edit.png" style="width:30px;height:30px" align="EDIT"></a></td>
						<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="drop.png" style="width:30px;height:30px" align="DELETE"></a></td>
					</tr>
		<?php
				}
				?>
				<tr>
					<th colspan="9" style="text-align:center" class = "add"><a href="add.php">add data here</a></th>
				</tr>
			</table>
			</footer>
	<hr>
		<center>
			<b><p style="color:#800000;margin-bottom:0.1em;font-size:40px;font-family:Impact, Charcoal, sans-serif">GET SOCIAL</b></p>
			<center><p style="margin-top:0.1em;margin-bottom:0.1em"><a href="https://www.facebook.com/kylajuliannn"target="_blank"><img a src="fblogo.png" style="width:50px;height:50px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://www.instagram.com/kylajuliannn/?hl=en"target="_blank"><img src="iglogo.png" style="width:50px;height:50px;"></a></center>
			<p style="font-size:12px;color:#800000;font-family:Impact, Charcoal, sans-serif;margin-top:0.1em"> Copyright 2016 MAJESTIC. </p>
		</center>
	</body>
</html>		
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
		WEBPROG-Excercise5
	</title>
  <style>
    body{
      background-image: url("clouds-bg.png");
      background-attachment: fixed;
      font-family: quicksand;
    }
    h1{
      text-align:center;
      color:black;
    }
    b{
      font-style: strong;
    }
    div{
      text-align:center;
    }
    a:link{
      text-decoration:none;
      color:black;
    }
    a:visited{
      color: black;
    }
    a:hover, a:active{
      color: #966fd6;
    }
    p{
      text-align: center;
      font-size: 30;
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
    hr{
      width: 58%;
      color: black;
    }
    #div-pic{
      width: 120;
      height: 120;
    }
    #normal{
      font-size: 25;
      padding-left:10%;
      padding-right:10%;
    }
    #subcat{
      display:inline-block;
      border:1px;
      padding:5px 0;
    }
    #extramenu{
      width: 100%;
      height: 10%;
    }
    #title{
      font-size: 85;
      height: 40;
      padding: 20;
    }
    #just{
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
    #div.menu{
      width:465px;
      margin: 0 auto;
      border:1px solid red;
      text-align:center;
    }
    #menu{
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
    div.transbox {
      background-color: rgba(255,255,255,.5);
      margin: 30px;
      margin-left: 600px;
      margin-right: 600px;
      padding:10;
    }
    .error {
      color: #FF0000;
    }
    input[type=text]:focus{
      width: 50%;
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
		  window.location.href='form-home.php?delete_id='+id;
		 }
		}
	</script>
	<body>
		<div style="text-align:center; margin-top:5em; margin-bottom:-30">
			<p style="font-family: amethyst; font-size: 50px;"> (metanoia) </p>
		</div>

		<div id="div.menu">
			<ul style="font-size:40" id="subcat">
				<li>
					<a href="mypage-p.php" id="headlink">main</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li>
					<a href="mypage2-p.php" id="headlink">gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
					<li class="dropdown">
					<a href="#" class="dropbtn">more...</a>
					<div class="dropdown-content">
						<a href="mypage1-p.php" id="headlink">profile</a>
						<a href="trivia-p.php" id="headlink">trivia</a>
						<a href="form-home.php" id="headlink">form</a>
					</div>
				</li>
			</ul>
		</div>


		<hr size="3px" width="58%" color="black">
		<hr	size="3px" width="58%" color="black">

		<h1 style="font-size: 60px;margin-top:25px"> FORM INDEX </h1>
		<table cellspacing="7" style="margin-top: -20px">
			<tr><center>
				<th style="font-size:30"><b>Name</b></th>
				<th style="font-size:30"><b>Nickname</b></th>
				<th style="font-size:30"><b>E-mail</th>
				<th style="font-size:30"><b>Home</b></th>
				<th style="font-size:30"><b>Gender</th>
				<th style="font-size:30"><b>Mobile</th>
				<th style="font-size:30"><b>Comment</th>
				<th style="font-size:30" colspan="2"><b>etc..</b></th>
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
					<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="edit.png" style="width:30px;height:30px" title="edit" align="EDIT" onmouseover="this.src='edit-hover.png';" onmouseout="this.src='edit.png';"></a></td>
					<td class = "delete" align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="drop.png" style="width:30px;height:30px" title="delete" align="DELETE" onmouseover="this.src='drop-hover.png';" onmouseout="this.src='drop.png';"></a></td>
				</tr>
			<?php
			}
			?>
			<tr><td style="border:none; background:none">&nbsp;</td></tr>
			<tr>
				<th colspan="9" style="text-align:center" class = "add"><a href="add.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add data here&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></th>
			</tr>
		</table>

		<p style="text-align:center">
			<img src="jolteon-m.gif" alt="pokemon-gif" style="width120px;height:120px">
			<img src="donut.png" alt="donut" style="width:120px;height:120px">
			<img src="donut.png" alt="donut" style="width:120px;height:120px">
			<img src="donut.png" alt="donut" style="width:120px;height:120px">
			<img src="jolteon.gif" alt="pokemon-gif" style="width:120px;height:120px">
		</p>

		<br>
		<hr>

		<div>
			<p style="text-align:center; font-family:quicksand; font-size: 20; color:black">- - - Jimenez, Marc Adrian P. | BSCS-CN151 | APC - - -</p>
			<p style="text-align:center; margin-top:0.5em">
				<a href="https://www.facebook.com/jumanjimenez" target="_blank"><img src="facebook.jpg" alt= "facebook"style="width:60px;height:60px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://twitter.com/_eydriyan" target="_blank"><img src="twitter.jpg" alt="twitter" style="width:60px; height:60px"></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://www.instagram.com/_eydriyuhn/" target="_blank"><img src="instagram.jpg" alt="instagram" style="width:60px; height:60px"></a> .
			</p>
		</div>
	</body>
</html>

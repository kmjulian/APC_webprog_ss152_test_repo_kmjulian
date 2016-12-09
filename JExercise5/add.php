<?php
	include_once 'dbconfig.php';
	$first_nameErr = $last_nameErr = $nicknameErr = $emailErr = $city_nameErr = $genderErr = $mobileErr = $commentErr = "";
	if(isset($_POST['btn-save']))
	{
		$error = "";
		$first_name = test_input($_POST["first_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z- ]*$/",$first_name)) {
			$first_nameErr = "<br><em style='font-size:20px'>Only letters and white space allowed</em>";
			$first_name = "";
			$error = "firstname";
		}

		$last_name = test_input($_POST["last_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
			$last_nameErr = "<br><em style='font-size:20px'>Only letters and white space allowed</em>";
			$last_name = "";
			$error = "lastname";
		}

	  	$nickname = test_input($_POST["nickname"]);
	  	if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
			$nicknameErr = "<br><em style='font-size:20px'>Only letters and white space allowed</em>";
			$nickname = "";
			$error = "nickname";
		}

		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "<br><em style='font-size:20px'>Invalid email format</em>";
			$email = "";
			$error = "email";
		}

		$city_name = test_input($_POST["city_name"]);

		$comment = test_input($_POST["comment"]);

		$gender = test_input($_POST["gender"]);

		$mobile = test_input($_POST["mobile"]);

		if(!preg_match("/^[0-9-]*$/",$mobile)){
			$mobileErr = "<br><em style='font-size:20px'>&nbsp;Only numbers are allowed</em>";
			$mobile = "";
			$error = "mobile";
		}

		if($error === ""){
			$sql_query = "INSERT INTO users(first_name,last_name,nickname,email,user_city,gender, mobile, comment) VALUES('$first_name','$last_name','$nickname','$email','$city_name','$gender','$mobile','$comment')";
			if(mysqli_query($con,$sql_query)){
				?>
				<script type="text/javascript">
				alert('Data input succesful');
				window.location.href='form-home.php';
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert('error occured while inputting data');
				</script>
				<?php
			}
			// sql query for inserting data into database
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Exercise 5
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
    .error {
      color: #FF0000;
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
	</style>
	<script type="text/javascript">
		function edt_id(id)
		{
		 if(confirm('Sure to edit ?'))
		 {
		  window.location.href='edit_data.php?edit_id='+id;
		 }
		}
		function delete_id(id)
		{
		 if(confirm('Sure to Delete ?'))
		 {
		  window.location.href='index.php?delete_id='+id;
		 }
		}
	</script>
	<body>
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
				<a href="index.php" targetsel>FORM</a>
			<hr>
		<hr size="3px" width="58%" color="black">
		<hr	size="3px" width="58%" color="black">

		<h1 style="font-size:40px;margin-top:25px">ADD DATA</h1>
		<div class="transbox" style="margin-top:-20px">
			<form method="post">
			<p><a href="form-home.php"><strong>*back to main page*</strong></a>
				<br>
				<br>
				First Name: <span class="error">* <?php echo $first_nameErr;?></span><br>
				<input type="text" name="first_name" placeholder="First Name" required>
				<br><br>
				Last Name: <span class="error">* <?php echo $last_nameErr;?></span><br>
				<input type="text" name="last_name" placeholder="Last Name" required>
				<br><br>
				Nickname: <span class="error">* <?php echo $nicknameErr;?></span><br>
				<input type="text" name="nickname" placeholder="Nickname" required>
				<br><br>
				Email: <span class="error">* <?php echo $emailErr;?></span><br>
				<input type="text" name="email" placeholder="Email Address" required>
				<br>
				<br>
				Home: <br>
				<input type="text" name="city_name" placeholder="City" required>
				<br><br>
				Gender: <br>
				<input type="radio" name="gender" value="female" title="Female">&nbsp;<img src="female.png" style="width:35px;height:30px" title="Female">
				<input type="radio" name="gender" value="male" title="Male"><img src="male.png" style="width:30px;height:30px" title="Male">
				<br><br>
				Mobile: <span class="error">* <?php echo $mobileErr;?></span><br>
				<input type="text" name="mobile" placeholder="Mobile Num" required>
				<br><br>
				Comment: <br>
				<textarea name="comment" placeholder="insert comment here" rows="3" cols="30"></textarea>
			</p>
			<button type="submit" name="btn-save"><strong>SAVE</strong>
			</form>
		</div>

		<footer>
			<center>
				<b><p style="color:Black;margin-bottom:0.1em;margin-top:0.1em;font-size:25px;font-family:"Arial Black", Gadget, sans-serif;">GET SOCIAL</b></p>
				<center><p style="margin-top:0.1em;margin-bottom:0.1em"><a href="https://www.facebook.com/kylajuliannn"target="_blank"><img a src="fblogo.png" style="width:50px;height:50px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://www.instagram.com/kylajuliannn/?hl=en"target="_blank"><img src="iglogo.png" style="width:50px;height:50px;"></a></center>
				<p style="font-size:12px;color:Black;font-family:"Arial Black", Gadget, sans-serif;margin-top:0.1em"> Copyright 2016 VICTORIOUS. </p>
			</center>
		</footer>
	</body>
</html>

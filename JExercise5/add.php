<?php
	include_once 'dbconfig.php';
	$first_nameErr = $last_nameErr = $nicknameErr = $emailErr = $city_nameErr = $genderErr = $mobileErr = $commentErr = $error = "";
	$first_name = "";
	$last_name = "";
	$nickname = "";
	$email = "";
	$city_name = "";
	$gender = "";
	$mobile = "";
	$comment = "";

	if(isset($_POST['btn-save']))
	{

		$first_name = test_input($_POST["first_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z- ]*$/",$first_name)) {
			$first_nameErr = "<br><em style='font-size:20px'>Only letters and white space allowed</em>";
			$error = "Err";
		}

		$last_name = test_input($_POST["last_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
			$last_nameErr = "<br><em style='font-size:20px'>Only letters and white space allowed</em>";
			$error = "Err";
		}

	  $nickname = test_input($_POST["nickname"]);
	  	if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
			$nicknameErr = "<br><em style='font-size:20px'>Only letters and white space allowed</em>";
			$error = "Err";
		}

		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "<br><em style='font-size:20px'>Invalid email format</em>";
			$error = "Err";
		}

		$city_name = test_input($_POST["city_name"]);

		$gender = test_input($_POST["gender"]);

		$mobile = test_input($_POST["mobile"]);

		if(!preg_match("/^[0-9-]*$/",$mobile)){
			$mobileErr = "<br><em style='font-size:20px'>&nbsp;Only numbers are allowed</em>";
			$error = "Err";
		}

				$comment = test_input($_POST["comment"]);

		if($error != "Err"){
			$sql_query = "INSERT INTO users(first_name,last_name,nickname,email,user_city,gender, mobile, comment) VALUES('$first_name','$last_name','$nickname','$email','$city_name','$gender','$mobile','$comment')";
			// sql query for inserting data into database
			if(mysqli_query($con,$sql_query))
			{
			?>
				<script type="text/javascript">
				alert('Data Are Inserted Successfully');
				window.location.href='index.php';
				</script>
			<?php
			}else{
			?>
				<script type="text/javascript">
				alert('error occured while inserting data');
				</script>
			<?php
			}
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
			<p><a href="index.php"><strong>*back to main page*</strong></a>
				<br>
				<br>
				First Name: <span class="error">* <?php echo $first_nameErr;?></span><br>
				<input type="text" name="first_name" placeholder="First Name" value ="<?php echo $first_name; ?>" required>
				<br><br>
				Last Name: <span class="error">* <?php echo $last_nameErr;?></span><br>
				<input type="text" name="last_name" placeholder="Last Name"  value = "<?php echo $last_name; ?>" required>
				<br><br>
				Nickname: <span class="error">* <?php echo $nicknameErr;?></span><br>
				<input type="text" name="nickname" placeholder="Nickname"  value = "<?php echo $nickname; ?>" required>
				<br><br>
				Email: <span class="error">* <?php echo $emailErr;?></span><br>
				<input type="text" name="email" placeholder="Email Address" value = "<?php echo $email; ?>" required>
				<br>
				<br>
				Home: <br>
				<input type="text" name="city_name" placeholder="City"  value = "<?php echo $city_name; ?>" required>
				<br><br>
				Gender: <br>
				<input type="radio" name="gender" <?php if (isset($gender) && $gender =="female") echo "checked";?> value="Female" required><img src="female.png" style="width:35px;height:30px" title="Female">
				<input type="radio" name="gender" <?php if (isset($gender) && $gender =="male") echo "checked";?> value="Male"><img src="male.png" style="width:30px;height:30px" title="Male">
				<br><br>
				Mobile: <span class="error">* <?php echo $mobileErr;?></span><br>
				<input type="text" name="mobile" placeholder="Mobile Num"  value =" <?php echo $mobile; ?>" required>
				<br><br>
				Comment: <br>
				<textarea name="comment" placeholder="insert comment here" rows="3" cols="30" value = "<?php echo $comment; ?>"></textarea>
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


<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Exercise 5
	</title>
	<style>
			body {
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
		#hide{
			display: none;
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
	<body background="<?php echo base_url();?>/images/Background.jpg">
      <head>
  		<div style="padding-left:520px; padding-right:500px; padding-top: 250px">
  		<img src="<?php echo base_url();?>/images/vic.png" alt="Signature Fonts" style="padding-top:7%"></a>
  		</div>
  		</head>
  		<br>
  		<div style = "background:#FBE7DC;">
  		<center>
  		<hr>
			<a href="<?php echo base_url('index.php/Home/index')?>" targetsel>HOME &nbsp;
			<a href="<?php echo base_url('index.php/About/index')?>" targetsel>ABOUT &nbsp;
			<a href="<?php echo base_url('index.php/Gallery/index')?>" targetsel>GALLERY &nbsp;
			<a href="<?php echo base_url('index.php/Contact/index')?>" targetsel>CONTACT &nbsp;
			<a href="<?php echo base_url('index.php/Trivia/index')?>" targetsel>TRIVIA &nbsp;
     	<a href="<?php echo base_url('index.php/Users/add_form')?>" targetsel>FORM</a>
  		<hr>
  		<hr size="3px" width="58%" color="black">
  		<hr	size="3px" width="58%" color="black">

		<h1 style="font-size:40px"> EDIT ENTRY </h1>
		<div class="transbox">
			<?php foreach ($single_users as $users): ?>
			<form method="post" action="<?php echo base_url() . "index.php/users/update_users_id1"?>">
				<p>
					<input type="text" id="hide" name="did" value="<?php echo $users->user_id; ?>">
					First Name: <span class="error">* </span><br>
					<input type="text" name="first_name" placeholder="First Name" value="<?php echo $users->first_name; ?>" required>
					<br><br>
					Last Name: <span class="error">* </span><br>
					<input type="text" name="last_name" placeholder="Last Name" value="<?php echo $users->last_name; ?>" required>
					<br><br>
					Nickname: <span class="error">* </span><br>
					<input type="text" name="nickname" placeholder="Nickname" value="<?php echo $users->nickname; ?>" required>
					<br><br>
					Email: <span class="error">* </span><br>
					<input type="text" name="email" placeholder="Email Address" value="<?php echo $users->email; ?>" required>
					<br><br>
					Home: <br>
					<input type="text" name="city_name" placeholder="City"  value="<?php echo $users->user_city; ?>" required>
					<br><br>
					Gender: <br>
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female" required>&nbsp;<img src="<?php echo base_url();?>/images/female.png" style="width:35px;height:30px" title="Female">
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male" title="Male"><img src="<?php echo base_url();?>/images/male.png" style="width:30px;height:30px" title="Male">
					<br><br>
					Mobile: <span class="error">* </span><br>
					<input type="text" name="mobile" placeholder="Mobile Num" value="<?php echo $users->mobile; ?>" required>
					<br><br>
					Comment: <br>
					<textarea name="comment" placeholder="insert comment here" rows="3" cols="30" value="<?php echo $users->comment; ?>"></textarea>
					<br>
					<br>
					<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
				  </p>
			</form>
		<?php endforeach;?>
		</div>

		<footer>
			<center>
				<b><p style="color:Black;margin-bottom:0.1em;margin-top:0.1em;font-size:25px;font-family:"Arial Black", Gadget, sans-serif;">GET SOCIAL</b></p>
				<center><p style="margin-top:0.1em;margin-bottom:0.1em"><a href="https://www.facebook.com/kylajuliannn"target="_blank"><img a src="<?php echo base_url();?>/images/fblogo.png" style="width:50px;height:50px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://www.instagram.com/kylajuliannn/?hl=en"target="_blank"><img src="<?php echo base_url();?>/images/iglogo.png" style="width:50px;height:50px;"></a></center>
				<p style="font-size:12px;color:Black;font-family:"Arial Black", Gadget, sans-serif;margin-top:0.1em"> Copyright 2016 VICTORIOUS. </p>
			</center>
		</footer>
	</body>
</html>

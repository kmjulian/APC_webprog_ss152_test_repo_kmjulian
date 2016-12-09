<html>
	<title>
		Exercise 3
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
		a:visited {
			color: #800000;
			background-color:transparent;
			text-decoration: none;
			font-family: "Lucida Console", Monaco, monospace;
			font-size:20px;
		}
		a:hover, a:active {
			color: #966fd6;
			background-color: transparent;
			text-decoration: none;
			font-family: "Lucida Console", Monaco, monospace;
			font-size:20px;
		}
		p {
			font-size:20px;
		}
		.button {
            background-color: transparent; /* Green */
            border: none;
            color: white;
            padding: 4px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: #9292b4;
            color: black;
            border: 2px solid black;
        }

        .button1:hover {
            background-color: #9292b4;
            color: white;
            border: 2px solid white;
        }
        .blink {
            -webkit-animation: blink .75s linear infinite;
            -moz-animation: blink .75s linear infinite;
            -ms-animation: blink .75s linear infinite;
            -o-animation: blink .75s linear infinite;
             animation: blink .75s linear infinite;
        }
        @-webkit-keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 1; }
            50.01% { opacity: 0; }
            100% { opacity: 0; }
        }
        @-moz-keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 1; }
            50.01% { opacity: 0; }
            100% { opacity: 0; }
        }
        @-ms-keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 1; }
            50.01% { opacity: 0; }
            100% { opacity: 0; }
        }
        @-o-keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 1; }
            50.01% { opacity: 0; }
            100% { opacity: 0; }
        }
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 1; }
            50.01% { opacity: 0; }
            100% { opacity: 0; }
		}
		b {
            font-style: strong;
        }
        div {
            text-align:center;
        }
        a:link {
            text-decoration:none;
            color:black;
        }
        a:visited {
            color: black;
        }
        a:hover, a:active {
            color: #966fd6;
		}
		</style>
	<body>
		<head>
		<div style="padding-left:520px; padding-right:500px; padding-top: 250px">
			<img src="http://fontmeme.com/embed.php?text=Victorious&name=BrockScript.ttf&size=30&style_color=000000" alt="Signature Fonts" style="padding-top:7%"></a>
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
        <a href="form-home.php" targetsel>FORM</a>
			<hr>
		</center>
			</center>
			<p><b><center>Favorite color?</b>
			<br><em id="demo1">   </em></p>
			<button class="button button1" onclick="document.getElementById('demo1').innerHTML = 'Blue'"> answer </center></button>

			<p><b><center>Favorite food?</b>
			<br><em id="demo2">   </em></p>
			<button class="button button1" onclick="document.getElementById('demo2').innerHTML = 'baby back ribs and 4 fingers chops'"> answer </center></button>

			<p><b><center>Favorite person?</b>
			<br><em id="demo3">    </em></p>
			<button class="button button1" onclick="document.getElementById('demo3').innerHTML = 'MY MOM'"> answer </center></button>

			<p><b><center>If you could be any person for a day, who would you want to be?</b>
			<br><em id="demo4">    </em></p>
			<button class="button button1" onclick="document.getElementById('demo4').innerHTML = 'Kylie Jenner'"> answer </center></button></p>

			<p><b><center>What is your greatest fear?</b>
			<br><em id="demo5">    </em></p>
			<button class="button button1" onclick="document.getElementById('demo5').innerHTML = 'Death'"> answer </center></button></p>

			<p><b><center>What is the meaning of your name?</b>
			<br><em id="demo6">    </em></p>
			<button class="button button1" onclick="document.getElementById('demo6').innerHTML = 'Victorious'"> answer </center></button></p>
			<hr>
			<footer style="margin-bottom:0.2em; margin-top: 0.2em">
			<p style="padding:2px; border:3px; text-align: center">
			<img src="5.jpg" style="width:135px;height:135px"><img src="6.jpg" style="width:135px;height:135px"><img src="8.jpg" style="width:135px;height:135px"><img src="9.jpg" style="width:135px;height:135px">
			<img src="10.jpg" style="width:135px;height:135px"><img src="12.jpg" style="width:135px;height:135px"><img src="13.jpg" style="width:135px;height:135px"><img src="14.jpg" style="width:135px;height:135px">
			</p>
			</footer>
			<hr>
			</div>
			<center>
			<b><p style="color:black;margin-bottom:0.1em;font-size:25px;font-family:"Arial Black", Gadget, sans-serif;">GET SOCIAL</b></p>
			<center><p style="margin-top:0.1em;margin-bottom:0.1em"><a href="https://www.facebook.com/kylajuliannn"target="_blank"><img a src="fblogo.png" style="width:50px;height:50px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://www.instagram.com/kylajuliannn/?hl=en"target="_blank"><img src="iglogo.png" style="width:50px;height:50px;"></a></center>
			<p style="font-size:12px;color:Black;font-family:Arial Black", Gadget, sans-serif;margin-top:0.1em"> Copyright 2016 VICTORIOUS. </p>
		</center>
		</DIV>
	</body>
</html>

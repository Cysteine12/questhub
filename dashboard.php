<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
		<head>
				<?php include("includes/head.php");?>
		</head>
		
		<body>
				<header class="header2" id="h">
						<?php include("includes/header2.php");?>
				</header>
				
				<nav id="nav">
						<?php include("includes/nav.php");?>
				</nav>
				
<!--SECTION 2 BEGINS HERE-->
				
				<div id="contain">
						<form id="container" autocomplete="off">
								<input type="text" id="username" class="input" placeholder="Insert Your Username"/ style="color:white;">
								<br/>
								<br/>
								<fieldset style="color:white; text-align:center">
										<input type="radio" name="gender" id="male"/>
										<label><b>Male</b></label>
										<input type="radio" name="gender" id="female"/>
										<label><b>Female</b></label>
								</fieldset>
								<br/>
								<br/>
								
								<input type="reset" value="Reset" class="button5" style="float:right;"/>
								<br/>
						</form>
				
						<button class="button3">SUBMIT</button>
				
				</div>
				
				<hr/>

				<div class="welcome">
						<div id="intro">
				Welcome To Our Site, <span class="gender"></span> <span class="name"></span>.
				We, the Admins of QuestHub Thank You, <span class="name"></span> For Signing With Us <span class="sirma"></span>. 
						
						</div>
				</div>
				
				<hr/>

				<div style="text-align:center;"class="welcome">
						<span style="font-size:30px; font-family:cursive;" class="button4">&#10040;ACCOUNT DETAILS&#10040;</span>
						<br/>
						<br/>
						
						<h3>
						<i class="fas fa-address-book"></i>
						Username: <span class="name"></span>
						</h3>
						<h3>
						Time Created: <script>printTime()</script>
						</h3>
						<h3>
						Date Created: <script>printDate()</script>
						</h3>
						<h3>
						Passcode(generated): <script>passCode()</script>
						</h3>
						<button class="button5"><i class="far fa-trash-alt"></i>Edit profile</button>
						<br/>
						<br/>
						
						<div id="cont">
  						 <div id="bo"></div>
						</div>
				</div>
				
				<hr/>
		
				<div>
						<a href="about.php">Learn more about us?</a>
						<br>
						<br/>
						
						<div align="center">
						<a href="https://helixcoders.wordpress.com"><img src="https://helixcoders.files.wordpress.com/2020/09/wp-1600654711881.png" alt="logo" width="50%" height="40%"/></a>
						<br/>
						
						You can also visit us on 
						<a href="https://helixcoders.wordpress.com" id="site" target="_blank">OUR OTHER WEBSITE</a>
						<br/>
						<br/>
						<br/>
						</div>
				</div>
				<div><a href="#h" id="back">&uarr;</a></div>
				
				<script>
								
var pos = 0; 
var box = document.getElementById("bo");
var t = setInterval(move, 20);

function move(){
  if(pos >= 90){
  		pos = -10;
  }
  else {
    pos += 1;
    bo.style.left = pos+"%";
  }
}
				</script>
		</body>
</html>

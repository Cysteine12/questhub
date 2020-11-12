<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
		<head>
				<?php include("includes/head.php");?>
		</head>
		
		<body id="body" style="background:#d7d7ed;">
				
				<div id="login_body">
						<div id="login_form">
        
        				<h1>Login</h1>
        				<form method="POST" action="./includes/login_config.php" autocomplete="on">
        						<label><i class="fas fa-address-book"></i>Username &rarr;</label>
        						<input type="text" name="username" placeholder="Username..." autofocus required/>
        						<br/>
        						<br/>
        						<label><i class="fas fa-unlock-alt"></i>Password &rarr;</label>
        						<input type="password" name="password" placeholder="Password..." required/>
        						<br/>
        						<br/>
        						<div align="center" style="padding: 10px;">
        								<input type="submit" value="Login" style="border-radius: 50px;background:green; color:#fff; width: 100px; height: 30px;"/>
        								<br/>
        								<br/>
        								<a href="about.html"><label>Forgotten password?</label></a>
        								<br/>
        								<br/>
        								<span style="color:blue;">Don't have an account?<a href="signup.php"><label>Sign Up</label></a>.</span>
        								<br/>
        								<br/>
        						</div>
								</form>
          </div>
       </div>
       
       <br/>
       <br/>
				
				<div id="foot">
						<span><a href="about.php">Contact Information. </a></span>
						<br/>
						<br/>
						<span><a href="privacy.php">Privacy Policy.</a></span>
						<br/>
						<br/>
						<script>printYear();</script>
						<span>&copy; All rights reserved.</span>
						
          <div><a href="#login_body" id="back">&uarr;</a></div>
				</div>
				
		</body>
</html>

<?php include("includes/config.php");?>
<!DOCTYPE HTML>
<html>
		<head>
				<?php include("includes/head.php");?>
		</head>
		
		<body id="body" style="background:#d7d7ed;">
				
				<div id="login_body">
						<div id="login_form">
        
        				<h1>Sign Up</h1>
        				<form method="POST" action="./includes/signup_config.php" autocomplete="off" onsubmit="return validate()">
    		    				<label><i class="fas fa-address-book"></i> Surname &rarr;</label>
 		       				<input type="text" name="surname" placeholder="Surname..." required/>
    		    				<br/>
  		      				<br/>
        						<label><i class="fas fa-address-book"></i> Other Name(s) &rarr;</label>
   		     				<input type="text" name="other_names" placeholder="Other name(s)..." required/>
      		  				<br/>
  		      				<br/>
       		 				<label><i class="fas fa-address-book"></i> Username &rarr;</label>
     		   				<input type="text" name="username" placeholder="Username..." required/>
       		 				<br/>
  		      				<br/>
  		      				<label><i class="fas fa-unlock-alt"></i> Password &rarr;</label>
  		      				<input type="password" name="password" placeholder="Password (6-16 characters)" minlength="6" maxlength="16" id="p1" required/>
     		   				<label><i class="fas fa-unlock-alt"></i> Confirm password &rarr;</label>
   		     				<input type="password" id="p2" placeholder=" Confirm Password" required/>
    		    				<br/>
   		     				<br/>
  		      				<label><i class="fas fa-male"></i> Male &rarr;</label>
  		      				<input type="radio" name="gender" value="Male"/>
		        				<label><i class="fas fa-female"></i> Female &rarr;</label>
    		    				<input type="radio" name="gender" value="Female">
    		    				<br/>
      		  				<br/>
     		   				<label><i class="fas fa-globe-africa"></i> Country &rarr;</label>
     		   				<input type="text" name="country" placeholder="Country..." required/>
   		     				<br/>
       		 				<br/>
     		   				<label><i class="far fa-envelope"></i> Email Address &rarr;</label>
     		   				<input type="email" name="email" placeholder="Email address..." id="e1" required/>
    		    				<label><i class="far fa-envelope"></i> Confirm Email Address &rarr;</label>
    		    				<input type="email" placeholder="Confirm email address..." id="e2" required/>
    		    				<br/>
  		      				<br/>
    		    				<iframe src="policy.php" style="width:100%; word-wrap:wrap;"></iframe>
    		    				<br/>
    		    				<br/>
    		    				Do you accept with this Policy
    		    				<br/>
    		    				<input type="checkbox" required/>
    		    				I accept
        				
   		     				<div align="center" style="padding: 10px;">
   		     						<input type="submit" value="SUBMIT" style="border-radius:50px; background:green; color:white; width:100px; height:30px;" class="button2"/>
   		     						<br/>
   		     						<br/>
   		     						<span>Already have an account?<a href="login.php">Login</a></span>
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
						<span><a href="policy.php">Privacy Policy.</a></span>
						<br/>
						<br/>
						<script>printYear();</script>
						<span>&copy; All rights reserved.</span>
						<br/>
						<div><a href="#login_body" id="back">&uarr;</a></div>
				</div>
				
		</body>
</html>

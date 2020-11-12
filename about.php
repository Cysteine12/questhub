<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
		<head>
				<?php include("includes/head.php");?>
		</head>
		<body style="margin:0; background-color:#cbcbb8;" id="body">
				<header class="head">
						<div style="display:inline;">
								<img src="https://helixcoders.files.wordpress.com/2020/09/wp-1600654711881.png" alt="logo" id="logo"/>
								<b id="topic" style="background-color:red;">Welcome To QuestHub Page</b>
						</div>
						<br/>
						<div id="line">
								<b id="name">QUESTHUB</b>
								<nav>
										<a href="index.php">Home</a>
										
										<a href="dashboard.php">Dashboard</a>
										
										<a href="signup.php" class="current">Sign Up</a>
										
										<a href="academics.php">Academics</a>
							 </nav>
						</div>
				</header>
				
				<section id="section">
						<aside>
						  <figure id="figure_about">
								<span style="font-size:30px; color:white;"><b>About Us</b></span>
								<img src="https://helixcoders.files.wordpress.com/2020/09/wp-1600654711881.png" alt="profile pics" draggable="true" id="ppics"/>
								
							  <figcaption>
								<button onclick="prev()" style="float:left;">Prev</button>
				<button onclick="next()" style="float:right;">Next</button>
								</figcaption>
								</figure>
								<br/>
								
								<div id="contact">
								<h1>CONTACT INFO</h1>
								<figure style="display:inline; margin:0;">
										<a href="mailto:gbengapeace2001@gmail.com">
												<img src="https://helixcoders.files.wordpress.com/2020/10/img_20201014_084906_013.jpg" alt="Gmail" width="20%" height="20%" style="border-radius:50%;"/>
										</a>
										<figcaption>
												<h4>Email Us</h4>
										</figcaption>
								</figure>
								<figure style="display:inline; margin:0;">
										<a href="tel:+2347064544565">
												<img src="https://helixcoders.files.wordpress.com/2020/10/img_20201014_084948_824.jpg" alt="Dial" width="20%" height="20%" style="border-radius:50%;"/>
										</a>
										<figcaption>
												<h4>Call Us</h4>
										</figcaption>
								</figure>
						</div>
						</aside>
						
						<article>
								<div style="padding:20px;"><span style="font-size:60px;"><b>About Us</b></span></div>
								<hr style="height:10px; background:white;"/>
								<span style="font-size:40px;">Our Story</span>
								<br/>
								Welcome to our page
								<br/>
								<span style="font-family:courier; font-size:large">Here, you can learn different programming languages and web designs such as:</span>
								<ul id="about_ul">
										<li>HTML</li>
										<br>
										<li>CSS</li>
										<br>
										<li>JAVASCRIPT</li>
										<br>
										<li>JQuery</li>
										<br>
										<li>PHP</li>
										<br>
										<li>ANGULAR + NestJS</li>
								</ul>
						</article>
				</section>
				<div style="height:50px; width:100%; background:#303b6a; margin:0;">
						<a href="#logo" style="color:white;">
								<h1>Back to top</h1>
						</a>
				</div>
				
				<marquee style="background:red;">
						Contact Us For Your Web Designs.
				</marquee>
				
				<div id="pull_up">
						<div id="pull_up_top">
								<span>&times</span>
						</div>
						
						<div>
								<img src="https://helixcoders.files.wordpress.com/2020/11/img_20201102_142308_029.jpg" height="60%" width="20%" alt="form" id="form_pic" onclick="contact_form()"/>
								
								<p id="form_txt">
										<b>SUBMIT A MESSAGE FOR US</b>
										<br/>
										<button class="button6" onclick="contact_form()">Open Form</button>
								</p>
						</div>
				</div>
				
				<div id="form_align">
				<form method="POST" action="./includes/contact_form.php" id="contact_form">
						<fieldset id="form_top">
								<div class="button7" onclick="contact_close()"><b>&times</b></div>
						</fieldset>
						<fieldset id="form_content">
								<input type="text" name="name" placeholder="Name... " required/>
								<br/>
								<br/>
								<br/>
								<input type="email" name="email" placeholder="Email..." required/>
								<br/>
								<br/>
								<br/>
								<textarea name="message" placeholder="Message Us" rows="6"></textarea>
								<br/>
								<br/>
								<br/>
								<button class="button8">Submit</button>
						</fieldset>
				</form>
				</div>
				
				
				
				
				<script>
var pic = ["https://helixcoders.files.wordpress.com/2020/09/wp-1600654711881.png", "https://helixcoders.files.wordpress.com/2020/10/img_20201014_200207_725.jpg", "https://helixcoders.files.wordpress.com/2020/10/img_20201014_150852_603.jpg", "https://helixcoders.files.wordpress.com/2020/10/img_20201015_132958_908.jpg"];
var p = document.getElementById("ppics");
var num = 0;

function next(){
								
								num++;
								if (num >= pic.length){
										num = 0;
										}
								p.src = pic[num];
								}
								
function prev(){
								
								num--;
								if (num < 0){
										num = pic.length - 1;
										}
								p.src = pic[num];
								}
setInterval(next, 3000);

				</script>
				
		</body>
</html>

<?php
		switch($_SERVER["SCRIPT_NAME"]){
				case "/index.php":
						$TITLE = "HOME | QuestHub";
						$KEYWORDS = "Homepage at QuestHub, index";
						$DESCRIPTION = "Welcome to our homepage, access varieties of section";
						break;
				
				case "/dashboard.php":
						$TITLE = "DASHBOARD | QuestHub";
						$KEYWORDS = "Dashboard at QuestHub, Account details";
						$DESCRIPTION = "KEYWORDS";
						break;
				
				case "/signup.php":
						$TITLE = "SIGN-UP | QuestHub";
						$KEYWORDS = "Sign-up at QuestHub, Account details";
						$DESCRIPTION = "KEYWORDS";
						break;
				
				case "/about.php":
						$TITLE = "ABOUT | QuestHub";
						$KEYWORDS = "About QuestHub";
						$DESCRIPTION = "KEYWORDS";
						break;
				
				case "/academics.php":
						$TITLE = "ACADEMICS | QuestHub";
						$KEYWORDS = "Academics at QuestHub";
						$DESCRIPTION = "KEYWORDS";
						break;
				
				default:
						$TITLE = "QuestHub";
						$KEYWORDS ="QuestHub Home page";
						$DESCRIPTION = "KEYWORDS";
				}
?>

<?php 
		function scale(){
				if ($_SERVER["SCRIPT_NAME"] == "/about.php"){
						echo 0.4;
						}
				else {
						echo 1.0;
						}
				}
?>

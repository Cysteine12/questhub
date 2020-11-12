<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/head.php");?>
    </head>

    <body style="margin:0; background-color:#cbcbb8;" id="body">
        
        <header class="header2" id="h">
            <?php include("includes/header2.php");?>
        </header>

        <nav id="nav">
            <?php include("includes/nav.php");?>
        </nav>
        
        <section id="boxes">
            
        </section>
        
        <script>
        		var db = firebase.firestore();
        		var question_type = "questions";
        </script>
        
    </body>
</html>

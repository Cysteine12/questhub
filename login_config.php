<?php 
  session_start();

  //GETTING THE LOGIN INPUT NAMES
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  //HOST DETAILS
  $host = "localhost";
  $host_user = "questhub";
  $host_pass = "helixcoders12";
  
  //CONNECT TO HOST
  $conn = mysqli_connect($host, $host_user, $host_pass);
  mysqli_select_db($conn, 'questhub');
  
  //QUERY TO DATABASE
  $s = "SELECT Username, Password FROM user_registration
        WHERE Username = '$username' AND Password = '$password'";
  $result = mysqli_query($conn, $s);
  
  if(mysqli_num_rows($result) == 1){
    $url1 = "/../index.php";
    header("location: $url1");
  }
  else {
    $url2 = "/../login.php";
    header("location: $url2");
  }
?>
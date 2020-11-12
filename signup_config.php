<?php 
  session_start();
  
  //CONNECT TO HOST
  $conn = mysqli_connect('localhost', 'questhub', 'helixcoders12', 'questhub');
  
  //GETTING THE LOGIN INPUT NAMES
  $Surname = $_POST["surname"];
  $Other_names = $_POST["other_names"];
  $Username = $_POST["username"];
  $Password = $_POST["password"];
  $Gender = $_POST["gender"];
  $Country = $_POST["country"];
  $Email = $_POST["email"];
  
  if($conn){
  //QUERY TO DATABASE
  $s = "SELECT Username FROM user_registration
        WHERE Username = '$Username'";
        
  $result = mysqli_query($conn, $s);
  
  if(mysqli_num_rows($result) == 1){
    echo "Username already taken";
  }
  else {
    $ins = "INSERT INTO user_registration(Surname, Other_Names, Username, Password, Gender, Country, Email) VALUES('$Surname', '$Other_names', '$Username', '$Password', '$Gender', '$Country', '$Email')";
    mysqli_query($conn, $ins);
    $url = "/../login.php";
    header("Location: $url");
  }
}else{
  echo "Conn error:".mysqli_connect_error();
}
?>
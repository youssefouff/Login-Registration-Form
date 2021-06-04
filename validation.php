<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab3";

$email = $_POST["Email"];
$psw = $_POST["password"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//select email and previously encrypted password from the table
$encrPsw = md5($psw); //password entered is encrypted
$z = "SELECT user_id, email, name, password FROM user WHERE(email = '$email' AND password = '$encrPsw')"; 
$result = mysqli_query($conn,$z);
$r = mysqli_fetch_assoc($result);
//number of rows after selecting the email and password
$num = mysqli_num_rows($result);

//if number of rows equals 1 that means that email and password are in the same row so they match
if($num == 1){
    $_SESSION['uname'] = $r["name"];
    header('location: welcomeLogin.php');
}
else{
echo "Incorrect email or password";
}

?>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab3";

$email = $_POST["Email"];
$name =  $_POST["name"];
$psw = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$s = "select user_id, email, name, password from user where email = '$email'";
$result = mysqli_query($conn, $s);
//$row = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"E-mail already exists";
}
else{
$sql = "INSERT INTO user (email, name, password, registration_date)
VALUES ('$email','$name', md5('$psw'),NOW())";
mysqli_query($conn, $sql);
$_SESSION['name'] = $name;
header('location: welcomeReg.php');
//echo "Registration successfull";
}

?>
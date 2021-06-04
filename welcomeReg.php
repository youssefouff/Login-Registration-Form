<?php 

session_start();

?>
<html>
<head>
<title> Home Page</title>
<link rel="stylesheet" type="text/css" href="welcome.css">
<link rel="stylesheet" type="text/css" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="centerDiv1">

<a class="float-right" href= "logout.php">
    <button type="submit" class="btn btn-danger"> Log Out </button>
</a>

<h1> Welcome <?php
 echo $_SESSION['name']; 
 echo "<br>";
 ?> </h1> 
<h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, description FROM department";
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Department name: ". $row["name"]. "---->" . $row["description"]. "<br>";
    }
}
?><br></h2>
</div>
</body>
</html>
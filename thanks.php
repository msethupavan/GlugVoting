<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "Registration";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "<html><body><img src='tnqvoting.png' width=100% height=100%/><center><a href='vote1.php'><button>Vote</button></a></center></body></html>";
session_unset(); 
session_destroy();
?>

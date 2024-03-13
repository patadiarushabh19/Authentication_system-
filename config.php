<?php 
//host
$host = "localhost";
$dbname = "auth-sys";
$user = "root";
$password = ""; 


$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $password); //establish a connection to the database
if($conn == true){
  
}else{
    die("Error: Could not connect. ".mysqli_connect_error());
}












?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_db";

$conn = new mysqli($username, $servername, $password, $dbname);

if($conn->connect_error){
    die("Connection failed". $conn->connect_error);
}
?>
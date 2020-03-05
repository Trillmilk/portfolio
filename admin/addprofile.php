<?php
require_once "../config.php";
session_start(); //Start the sessionprint_r($_SESSION);
define('DOC_ROOT',dirname(__FILE__));
if(!isset($_SESSION['name'])){
    //Get the user name from the previously registered super global variable
    //If session not registered
header("location:admn-yh.html"); // Redirect to login.php page
}
else //Continue to current page
{
    define('ADMIN',$_SESSION['name']); 

header( 'Content-Type: text/html; charset=utf-8' );
}
?><?php
$uname = filter_input(INPUT_POST, 'uname');
$pass = filter_input(INPUT_POST, 'pass');
$email = filter_input(INPUT_POST, 'email');
// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO client (uname, pass, email)
VALUES ('$uname', '$pass', '$email')";

if ($conn->query($sql) === TRUE) {
    header("location:clients.php?msg=New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
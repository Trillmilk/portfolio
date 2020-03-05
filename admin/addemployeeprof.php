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
$designation = filter_input(INPUT_POST, 'designation');
// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO worker (uname, pass, email, designation)
VALUES ('$uname', '$pass,', '$email', '$designation')";

if ($conn->query($sql) === TRUE) {
    header("location:employee.php?msg=New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
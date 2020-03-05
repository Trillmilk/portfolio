<?php
require_once "../config.php";
session_start(); //Start the sessionprint_r($_SESSION);
define('DOC_ROOT',dirname(__FILE__));
if(!isset($_SESSION['name'])){
    //Get the user name from the previously registered super global variable
    //If session not registered
header("location:../emp-yh.html"); // Redirect to login.php page
}
else //Continue to current page
{
    define('ADMIN',$_SESSION['name']); 

header( 'Content-Type: text/html; charset=utf-8' );
}
?><?php
$projectn = filter_input(INPUT_POST, 'projectn');
$uname = filter_input(INPUT_POST, 'uname');
$emp = filter_input(INPUT_POST, 'emp');
$task = filter_input(INPUT_POST, 'task');
$hours = filter_input(INPUT_POST, 'hours');
// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO hours (uname, projectn, task, hours, emp)
VALUES ('$uname', '$projectn', '$task', '$hours', '$emp')";

if ($conn->query($sql) === TRUE) {
    header("location:hours.php?msg=New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
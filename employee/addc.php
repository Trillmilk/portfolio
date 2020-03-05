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
$projectid = filter_input(INPUT_POST, 'projectid');
$uname = filter_input(INPUT_POST, 'uname');
$comments = filter_input(INPUT_POST, 'comments');
// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO projectswork (projectid, comments, uname)
VALUES ('$projectid', '$comments', '$uname')";

if ($conn->query($sql) === TRUE) {
    header("location:employee.php?msg=New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
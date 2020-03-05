<?php
session_start();
require_once "../config.php"; // To properly get the config.php file
$username = $_POST['username']; //Set UserName
$password = $_POST['pass']; //Set Password
$msg ='';
if(isset($username, $password)) {
    ob_start();//Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM client WHERE uname='$myusername' and pass='$mypassword'";
    
    $result=mysqli_query($dbC, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
       // session_register("admin");
        //session_register("password");
        $_SESSION['name']= $myusername;
        header("location:home.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:../client.html?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=Please enter some username and password");
}
?>
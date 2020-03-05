<?php
require_once "config.php";
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$sql = "INSERT INTO requests(name, phone, email, msg) VALUES ('$name','$phone', '$email', '$msg')";

if ($dbC->query($sql) === TRUE) {
    header("location:index.php?msg=New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $dbC->error;
}
$dbC->close();
?>
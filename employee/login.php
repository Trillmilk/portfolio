<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Login Demo</title>
</head>
<body>
<?php
    $login_form = <<<EOD
<form name="login" id="login" method="POST" action="check_login.php">
<p><label for="username">Please Enter Username: </label><input type="text" size="100" name="username" id="username" value="Enter Username here" /></p>
<p><label for="password">Please Enter Password: </label><input type="password" size="40" name="password" id="password" value="abracadabra" /></p>
<p><input type="submit" name="submit" id="submit" value="Submit"/> <input type="reset" name="reset" id="reset" value="reset"/></p>
</form>
EOD;
$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<p>'.$msg.'</p>'; //If message is set echo it
echo "<h1>Please enter your Login Information</h1>";
echo $login_form;
?>
</body>
</html>
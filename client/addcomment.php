<?php
session_start(); //Start the sessionprint_r($_SESSION);

if(!isset($_SESSION['name'])){
    //Get the user name from the previously registered super global variable
    //If session not registered
header("location:../client.html"); // Redirect to login.php page
}
else //Continue to current page
{
    define('ADMIN',$_SESSION['name']); 

header( 'Content-Type: text/html; charset=utf-8' );
}
$rela=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
 <head>
    <?php include("header.php"); ?>
  <!-- Bootstrap 3.3.6 -->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body>
    <?php include("topnav.php"); ?>
  <div class="banner">
    <div class="Container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="stage" style="margin-top: 10px;margin-left: 25%;">
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
            <div class="layer"></div>
          </div>
          <center>
            <p id="bannerp">
              Client:<?php echo ADMIN /*Echo the username */ ?>
            </p>
          </center>
        </div>
      </div>
    </div>
  </div>
          <!-- Status -->
         


   <div class="wrapper">
        <div class="container-fluid" style="color:Black">
            <div class="row" style="background-color:white;">
                <div class="col-md-12"><center>
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Add Comment Against Selected Project;</h2>
                    </div></center>
   <div class="row">
        <div class="control-group" id="fields">
            <div class="controls" id="profs"> 

  <?php 
   $id = $_GET['id'];
   ?>
   <center> <h1>Add a Comment</h1>
    <form class="form" method="POST" action="addc.php">
     <input type="hidden" id="custId" name="projectid" value="<?php echo " $id "?>">
     <input type="hidden" id="custId" name="uname" value="<?php echo ADMIN /*Echo the username */ ?>">
 <textarea name="comments" style="width:250px;height: 150px">Enter description here...</textarea><br>
      <input type="submit" value="Submit"><br>
    </form>
  </center>
   </div>
        </div>
  </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
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
                        <h2 class="pull-left">Comment Details</h2>
                    </div></center>         <?php
                    // Include config file
                    require_once "../config.php";
                    
                    // Attempt select query execution
               $id = $_GET['id'];
                    $sql = "SELECT * FROM projectswork where projectid= $id";
                    if($result = mysqli_query($dbC, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                         echo "<th>Comments</th>";
                                        echo "<th>Person</th>";
                                        echo "<th>Date</th>";
                                        echo "<th>Add New Comment</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['comments'] . "</td>";
                                        echo "<td>" . $row['uname'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='addcomment.php?id=". $row['projectid'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbC);
                    }
 
                    // Close connection
                    mysqli_close($dbC);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
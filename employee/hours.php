<?php
session_start(); //Start the sessionprint_r($_SESSION);

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
              Employee:<?php echo ADMIN /*Echo the username */ ?>
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
                        <h2 class="pull-left">Your Projects Hours</h2>
                    </div></center>
                    
                    <?php
                    // Include config file
                    require_once "../config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM hours where emp = '$rela'";
                    if($result = mysqli_query($dbC, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Project</th>";
                                        echo "<th>Task</th>";
                                        echo "<th>Hours</th>";
                                        echo "<th>Date</th>";
                                        echo "<th>Employee</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['projectn'] . "</td>";
                                        echo "<td>" . $row['task'] . "</td>";
                                        echo "<td>" . $row['hours'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['emp'] . "</td>";
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
      
   <div class="wrapper">
        <div class="container-fluid" style="color:Black">
            <div class="row" style="background-color:white;">
                <div class="col-md-12"><center>
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Add Your Hours</h2>
                    </div></center>
              
   <center>
    <form class="form" method="POST" action="addtask.php">

     <input type="text" name="projectn" placeholder="ProjectName"><br>
     <input type="text" name="uname" placeholder="owner username"><br>
     <input type="hidden" name="emp" value="<?php echo ADMIN /*Echo the username */ ?>">
 <textarea name="task" style="width:250px;height: 150px">Enter Task here...</textarea><br>
        <h3>Hours</h3>
     <input type="int" name="hours" placeholder="0">
      <input type="submit" value="Submit"><br>
    </form>
  </center>
                </div>
            </div>        
        </div>
    </div>
   
</body>
</html>
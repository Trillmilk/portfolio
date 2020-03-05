<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

      <ul class="sidebar-menu">
        <li class="header">Page</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="admin.php"><i class="fa fa-link"></i> <span>Submitted Requests</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="client.php">Profiles</a></li>
            <li><a href="viewproject.php">View Projects</a></li>
            <li><a href="addproject.php">Add Projects</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php">Profiles</a></li>
            <li><a href="addemployee.php">Add Employee</a></li>
          </ul>
        </li>
      </ul>
</body>
</html>
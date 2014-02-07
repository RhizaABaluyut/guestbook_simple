<html>
<title>Laverdad Guests</title>

<head>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
  <link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body background = "14.jpg">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner primary">
          <div class="container">
            <h1><a href="Home.php" class="brand brand-bootbus text-success"><font face = "Georgia" size = "6" color = "cyan">
              Laverdad Guests</font></a></h1>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li><a href="Home.php"><font face = "Georgia" size = "2" color = "blue">Home</font></a></li>
                <li><a href="Messages.php"><font face = "Georgia" size = "2" color = "blue">Messages</font></a></li>
                <li><a href="View.php"><font face = "Georgia" size = "2" color = "blue">Guests</font></a></li>
                <li><a href="Edit.php"><font face = "Georgia" size = "2" color = "blue">Update Profile</font></a></li>
                <li><a href ="logout.php"><font face = "Georgia" size = "2" color = "blue">Log-out</font></a></li>
              </ul>
            </div>
          </div>
        </div>


	<div class="page-header">
        </div>
        
          <div class="span8 offset2 well">
			<table class = "table table-bordered">
					<?php
			include 'connect.php';
			echo "<thead><tr><th>Name</th>
				<th>Last Name</th>
				<th>Birth Date</th>
				<th>Address</th>
				<th>Username</th></tr><thead>";
			echo "<tbody><tr><td>".$_SESSION['fname']."</td>
				<td>".$_SESSION['lname']."</td>
				<th>".$_SESSION['bday']."</td>
				<td>".$_SESSION['address']."</td>
				<td>".$_SESSION['username']."</td></tr><tbody>";
			?>
			</table>
		</div>
	</div>
</div>
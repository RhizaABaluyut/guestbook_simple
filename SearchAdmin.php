<html>
<title>Laverdad Guests</title>

<head>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
</head>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner primary">
          <div class="container">
            <h1><a href="Home.php" class="brand brand-bootbus text-success">Laverdad Guests</a></h1>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li><a href ="index1.php">Guests</a></li>
				<li><a href ="CreateMessageAdmin.php">Message</a></li>
				<li><a href ="logout.php">Log-out</a></li>
              </ul>
            </div>
          </div>
        </div>

<?php
	include_once("functions.php");
	$search = $_POST['search'];
?>
 <div class = "container">
	<div class="page-header" style ="background:beige">
		<br><h4 style = "margin-top:10px; margin-left:30px;">Laverdarian Guests</h4>
			<form method = 'post' action = 'Search.php' class="navbar-form navbar-left" role="search">
				<div class="form-group" style = "margin-left:550px">
			        <input type="text" class="form-control" placeholder="Search" name = 'search'>
			        <button type="submit" class="btn btn-info">Submit</button>
			    </div>
			 		
			</form>
        </div>
        <div class="row">
          <div class="span10 offset1 well" style ="background:skyblue">

		<table class = "table">
			<?php
				$lists = get_result_forms($search);
				$p = 'post';
				$u = "SendMessageAdmin.php?id=";
				$s = 'submit';
				$n = "Send_Message";
				echo "<tr><thead><th>"."ID"."</th>"
						."<th>"."Name"."</th>"
						."<th>"."Last Name"."</th>"
						."<th>"."Birth Date"."</th>"
						."<th>"."Address"."</th>"
						."<th>"."Gender"."</th>"
						."<th>"."Action"."</th></thead></tr>";
				
				foreach ($lists as $list) {
					echo "<tbody><tr><td>".$list['id']."</td>"
						."<td>".$list['fname']."</td>"
						."<td>".$list['lname']."</td>"
						."<td>".$list['bday']."</td>"
						."<td>".$list['address']."</td>"
						."<td>".$list['gender']."</td>"
						."<td>"."<form method =".$p." action = ".$u.$list['id'].
						"> <input type =".$s." name = ".$n." value = ".$n." class='btn btn-success'></form></td>";
						
				}
				echo "</table>";
			?>
				</div>
			</div>
		</div>

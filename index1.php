<html>
<title>Laverdad Guests</title>

<head>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body background = "14.jpg">
      <div class="navbar navbar-fixed">
        <div class="navbar-inner primary">
          
            <h1><a href="Home.php" class="brand brand-bootbus text-success"><font face = "Georgia" size = "6" color = "cyan">
            	Laverdad Guests</a></h1></font>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
              <ul class="nav pull-right">
                <li><a href ="index1.php"><font face = "Georgia" size = "2" color = "blue">Guests</a></li></font>
				<li><a href ="CreateMessageAdmin.php"><font face = "Georgia" size = "2" color = "blue">Message</a></li></font>
				<li><a href ="logout.php"><font face = "Georgia" size = "2" color = "blue">Log-out</a></li></font>
              </ul>
            </div>
          </div>
        </div>
        <br>
		<br>
    </br>
<?php
	include_once("functions.php");
?>
			
		
			<?php
				include_once("functions.php");
			?>
			 <br>
			 <br> <br>
			 <br>
			<form method = 'post' action = 'SearchAdmin.php' class="navbar-form navbar-left" role="search">
				<div class="form-group" style = "margin-left:650px">
			        <input type="text" class="form-control" placeholder="Search" name = 'search'>
			        <button type="submit" class="btn btn-info">Submit</button>
			    </div>
			 		
			</form>
        </div>
</br>
        <br>
		
		
      
          <div class="row">
          <div class="span10 offset1 well">



<table class = "table">
	<?php
		$lists = get_all_forms();
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
</body>

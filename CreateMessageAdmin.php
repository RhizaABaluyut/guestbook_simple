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
            	Messages</a></h1></font>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li><a href ="index1.php"><font face = "Georgia" size = "2" color = "blue">Guests</a></li></font>
				<li><a href ="CreateMessageAdmin.php"><font face = "Georgia" size = "2" color = "blue">Message</a></li></font>
				<li><a href ="logout.php"><font face = "Georgia" size = "2" color = "blue">Log-out</a></li></font>
              </ul>
            </div>
          </div>
        </div>

<div class = "container">
	<div class="page-header">
        </div>
        <div class="row">
          <div class="span8 offset2 well">
			<?php
			include "functions.php";
			$id = $_SESSION['id'];
			$sent_items = getSentItemsofAllUsers();
			?>

			<table class = "table table-bordered">	
				<tr>
					<th> Sender </th>
					<th> Receiver </th>
					<th> Date Sent </th>
					<th> Message </th>
					<th> Action </th>
				</tr>
				<?php foreach ($sent_items as $sent):?>
				<tr>
					<td> <?php 
							$senders =  Sender($sent['sender']);
				 			   echo $senders['fname']." ".$senders['lname'];?> </td>
			 		<td> <?php echo $sent['fname'];?> </td>
					<td> <?php echo $sent['date_sent'];?> </td>
					<td> <?php echo $sent['message_subject'];?> </td> 
					<td> <?php echo $sent['message_body'];?> </td> 
				</tr>
				<?php endforeach;?>

			</table>
		</body>

		</div>
	</div>
</div>
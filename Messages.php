<html>
<title>Laverdad Guests</title>

<head>

	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
  <link type = "text/css" rel = "stylesheet" href = "style.css" >
  <style type="text/css">
      .span8-offset2-well{
        margin-top: 10%;
        margin-left: 20%;     
      }
  </style>
</head>
<body background = "14.jpg">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner primary">
          <div class="container">
            <h1><a href="Home.php" class="brand brand-bootbus text-success"><font face = "Georgia" size = "6" color = "cyan">Messages</font></a></h1>
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
       </div>

       
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
			
        
           <div class="span8 offset2 well">
				<?php
				include "functions.php";
				$sent_items = getSentItemsofAllUsers();
				?>
       
       
				<table class = "table">
        
       
           
					<tr>
					
            <th> <font face = "Georgia" size = "4">  Receiver </th>
						<th> <font face = "Georgia"size = "4">  Date Sent </th>
						<th> <font face = "Georgia"size = "4">  Message </th>
						<th><font face = "Georgia"size = "4">  Action </th>
					</tr></font></br>
					<?php foreach ($sent_items as $sent):?>
					<tr>
				 		<td> <?php echo $sent['fname'];?> </td>
						<td> <?php echo $sent['date_sent'];?> </td>
						<td> <?php echo $sent['message_body'];?> </td> 
						<form action = "deleteMessage.php?id=<?=$sent['message_id'];?>" method = 'POST'>
						<td><input type = 'submit' name = 'delete' value = 'Delete' class="btn btn-warning btn-lg btn-block"></form></td>
            <form action = "forwardMessage.php?id=<?=$sent['message_id'];?>" method = 'POST'>
            <td><input type = 'submit' name = 'delete' value = 'Forward' class="btn btn-info btn-lg btn-block"></form></td>
					</tr>
					<?php endforeach;?>

				</table>

			</div>
		</div>
  </div>
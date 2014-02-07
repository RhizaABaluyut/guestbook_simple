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

@$receiver = $_GET['id'];
@$sender = $_SESSION['id'];

include 'functions.php';
@$receiver_details = getReceiver($receiver);

?><center>
 <div class = "container">
	<div class="page-header" style ="background:beige">
		<h2 style = "margin-top:10px; margin-left:30px;">Create Message</h2>
        </div>
        <div class="row">
          <div class="span6 offset3 well" style ="background:skyblue">
			<form action="SentAdmin.php" method="POST">
				<table class = "table">
					<tr>
						<td><b>Send Message to :</td>
						<td><?php echo @$receiver_details['fname']." ".@$receiver_details['lname'];?></td>
					</tr>
					<tr>
						<td><b>Subject</td>
						<td><input type = "text" name="subject" size = '20' autofocus></td>
					<tr>
						<td><b>Message:</td>
						<td><textarea cols ='35' row = '10' name = 'message' class = "span4"></textarea></td>
					</tr>
				</table>
				<input type="hidden" name="receiver" value="<?php echo $receiver;?>"> 
				<input type="hidden" name="sender" value="<?php echo $sender;?>">
				<input type="submit" value="Send" class='btn btn-success'>

			</form>
		</div>
	</div>
</div>

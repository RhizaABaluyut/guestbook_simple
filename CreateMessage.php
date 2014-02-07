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
            <h1 class="brand brand-bootbus"><font face = "Georgia" size = "6" color = "cyan">Create Message</h1></font>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li><a href="Home.php"><font face = "Georgia" size = "2" color = "blue">Home</a></li></font>
                <li><a href="Messages.php"><font face = "Georgia" size = "2" color = "blue">Messages</a></li></font>
                <li><a href="View.php"><font face = "Georgia" size = "2" color = "blue">Guests</a></li></font>
                <li><a href="Edit.php"><font face = "Georgia" size = "2" color = "blue">Update Profile</a></li></font>
                <li><a href ="logout.php"><font face = "Georgia" size = "2" color = "blue">Log-out</a></li></font>
              </ul>
            </div>
          </div>
        </div>
<?php

@$receiver = $_GET['id'];
@$sender = $_SESSION['id'];

include 'functions.php';
@$receiver_details = getReceiver($receiver);

?>
<br>
<br>
<br>
</br>
        <div class="row">
          <div class="span6 offset3 well">
			<form action="sendMessage.php" method="POST">
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
    </body>
		</div>
	</div>
</div>

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
            <h1><a href="Home.php" class="brand brand-bootbus text-success"><font face = "Georgia" size = "6" color = "cyan">Updating Profile</font></a></h1>
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
<center>
	<br>
	<br>
	<br>
 <div class = "container">
        <div class="row">
        	
          <div class="span8 offset2 well">
          	<?php
				include 'connect.php';
				$id =  $_SESSION['id'];
				$query = "SELECT * from guests where id = '{$id}'";
				$result = mysql_query($query);
				$row = mysql_fetch_assoc($result);
			?>
			<form action='UpdateAuthenticator.php' method="POST">
				<table class = "table">
					<tr>

						<td><b>Name: </td>
						<td><input type = 'text' name = 'name' size = '30' value = "<?=$row['fname']?>"></td>
			
					</tr>
					<tr>
						<td><b>Surname: </td>
						<td><input type = 'text' name = 'lname' size = '30' value = "<?=$row['lname']?>"></td>			
					</tr>
					<tr>
						<td><b>Birth Day: </td>
						<td><select size = '1' name = 'month' class = "span2">
							<?php
							$bday =explode("-", $row['bday']);
							$month = array (0, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
							?>
							 <option value = "<?=$bday[1]?>"><?php $m = (int)$bday[1]; echo $month[$m];?></option>
							<?php
							for($i = 1; $i<=12; $i++){
								$aa = $month[$i];
								echo "<option value='{$i}'>{$aa}</option>";
							}
							?>
						</select>
							<select size = '1' name = 'day' class = "span1">
								<option value = "<?=$bday[2]?>"><?=$bday[2]?></option>
							<?php
							for($i = 1; $i <= 31; $i++){
								echo "<option value = ".$i.">".$i."</option>";
							}
							?>
						</select>
							<select size = '1' name = 'year' class = "span2">
								<option value = "<?=$bday[0]?>"><?=$bday[0]?></option>
							<?php
							for($i = 2013; $i >= 1950; $i--){
								echo "<option value = ".$i.">".$i."</option>";
							}
							?>
						</select>
					</tr>
					<tr>
						<td><b>Address:</td>
						<td><input type = 'text' size = '50' name = 'address' value="<?=$row['address']?>"></td>
					</tr>
					<tr>
						<td><b>Gender</td>
						<td><input type = 'radio' name = 'gender' value = 'Male' <?php
						if($row['gender'] == "male"){
							echo "checked";
						}
						?>>Male<br>
							<input type = 'radio' name = 'gender' value = 'Female' <?php
						if($row['gender'] == "female"){
							echo "checked";
						}
						?>>Female</td>
					</tr>
					<tr>
						<td><b>Username: </td>
						<td><input type = 'text' name = 'user' size = '30' value="<?=$row['username']?>"></td>
						
					</tr>
					<tr>
						<td><b>Password: </td>
						<td><input type = 'text' name = 'pass' size = '30' value="<?=$row['password']?>"></td>						
					</tr>		
				</table>
					<button type = 'submit' name = 'save' class = "btn btn-primary">Update</button>
					<input type = 'hidden' name = 'id'  value = "<?=$row['id']?>">
			</form>
		</div>
	</div>
</div>

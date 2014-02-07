<html>
<title>Laverdad Guests</title>

<head>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body background = "14.jpg">
      <div class="navbar navbar-fixed">
        <div class="navbar-inner primary">
          <div class="container">
            <h1><a href="loginpage.php" class="brand brand-bootbus text-success"><font face = "Georgia" size = "6" color = "cyan">Laverdad Guests</font></a></h1>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                
                <li><a href="loginpage.php" class="active-link"><font face = "Georgia" size = "2" color = "blue">Sign in</font></a></li>
              </ul>
            </div>
          </div>
        </div>
<center>
<script type = "text/javascript">
	function check_name(){
		var name = document.getElementById("name").value;
			if(name.length > 4){
				return true;
			}else{
				document.getElementById("err_name").innerHTML = 'Enter 5-30 char name';
				return false;
		}
}
	function check_lname(){
		var lname = document.getElementById("lname").value;
			if(lname.length > 4){
				return true;
			}else{
				document.getElementById("err_lname").innerHTML = 'Enter 5-30 char Surname';
				return false;
		}
}

	function check_bday(){
		var month = document.getElementById("month").value;
		var day = document.getElementById("day").value;
		var year = document.getElementById("year").value;
		if(month == 0 && day == 0 && year ==0){
		document.getElementById("err_bday").innerHTML = 'Enter your Birthdate';
				return false;
			}else{

				return true;
			}
}
	function check_address(){
		var address = document.getElementById("address").value;
			if(address.length > 4){
				return true;
			}else{
				document.getElementById("err_address").innerHTML = 'Enter your Address';
				return false;
		}
}
function check_gender(){
	var radios = document.getElementById("g_gender");
	var radios1 = document.getElementById("g_genders");

	if(radios.checked || radios1.checked){
		return true;
	}else{
		document.getElementById("err_gender").innerHTML = 'Choose your Gender';
		return false;
	}

}
	function check_username(){
		var user = document.getElementById("user").value;
			if(user.length > 4){
				return true;
			}else{
				document.getElementById("err_username").innerHTML = 'Enter 5-30 char Userrname';
				return false;
		}
}
	function check_password(){
		var pass = document.getElementById("pass").value;
			if(pass.length > 0){
				return true;
			}else{
				document.getElementById("err_pass").innerHTML = 'Enter 5-30 char Password';
				return false;
		}
}
	function check_cpassword(){
		var cpass = document.getElementById("cpass");
		var pass = document.getElementById("pass");
			if(cpass == pass){
				return true;
			}else{
				document.getElementById("err_cpass").innerHTML = 'Rewrite Password';
				return false;
		}
}
function validate(){
	if(check_name() && check_lname() && check_birth() && check_gender() && check_address() && check_password() && check_cpassword() && check_username()){
		return true;
	}else{
		alert("Fill out the Form!!");
		return false;
	}
}

</script>
 

       
        	<br>
        	<br>
       		<br>
       		
        	</br>
          <div class="span8 offset2 well">
			<form action='InsertAuthenticator.php' method="POST">
				<table class = "table">
					<tr>
						<th>Name: </th>
						<td><input type = 'text' name = 'name' size = '30' id = 'name' onblur = 'check_name()' placeholder = '5 - 30 char' autofocus></td>
						<td><span id = 'err_name'></span></td>
					</tr>
					<tr>
						<td>Surname: </td>
						<td><input type = 'text' name = 'lname' size = '30' id = 'lname' onblur = 'check_lname()' placeholder = '5 - 30 char'></td>
						<td><span id = 'err_lname'></span></td>
					</tr>
					<tr>
						<td>Birth Day: </td>
						<td><select size = '1' name = 'month' id = 'month' onblur = 'check_bday()' class = "span1">
								<?php
								$month = array ("Month", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
								for($i = 0; $i < 12; $i++){
									echo "<option value = ".$i.">".$month[$i]."</option>";
								}
								?>
						</select>
						<select size = '1' name = 'day' id = 'day' onblur = 'check_bday' class = "span1">
								<option value = '0'>Day</option>
								<?php
								for($i = 1; $i <= 31; $i++){
									echo "<option value = ".$i.">".$i."</option>";
								}
								?>
						</select>
								<select size = '1' name = 'year' id = 'year' onblur = 'check_bday' class = "span1">
								<option value = '0'>Year</option>
								<?php
								for($i = 2013; $i >= 1950; $i--){
									echo "<option value = ".$i.">".$i."</option>";
								}
								?>
						</select>
						<td><span id = 'err_bday'></span></td>
						</tr>
					
					<tr>
						<td>Address: </td>
						<td><textarea cols ='35' row = '10' name = 'address' id = 'address' onblur = 'check_address()' placeholder = 'Barangay, City, Province'></textarea></td>
						<td><span id = 'err_address'></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type = 'radio' name = 'gender' value = 'Male' id = 'g_gender' onblur = 'check_gender()' >Male<br>
							<input type = 'radio' name = 'gender' value = 'Female' id = 'g_genders' onblur = 'check_gender()' >Female</td>
						<td><span id = 'err_gender'></span></td>
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type = 'text' name = 'user' size = '30' id = 'user' onblur = 'check_username()' placeholder = '5 - 30 char'></td>
						<td><span id = 'err_username'></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type = 'password' name = 'pass' size = '30' id = 'pass' onblur = 'check_password()' ></td>
						<td><span id = 'err_pass'></span></td>
					</tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type = 'password' name = 'cpass' size = '30' id = 'cpass' onblur = 'check_cpassword()' placeholder = 'Rewrite Password'></td>
						<td><span id = 'err_cpass'></span></td>
					</tr>
				</table>
						<button type = 'submit' onclick = 'return validate()' class = "btn btn-success">Submit</button>
						<button type = 'reset' class = "btn">Clear</button>		
			</form>
		</div>
	</div>
</div>
</body>

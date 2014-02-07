<html>

<center>
<font color = 'green' size = '20' face = 'French Script MT'>
<script type = "text/javascript">
function check_name(){
	var name = document.getElementById("f_name").value;
	if(name.length > 0){
		return true;
	}else{
		document.getElementById("err_name").innerHTML = 'Enter your name';
		return false;
	}
}
function check_surname(){
	var surname = document.getElementById("l_name").value;
	if(surname.length > 0){
		return true;
	}else{
		document.getElementById("err_surname").innerHTML = 'Enter your surname';
		return false;
	}
}
function check_birth(){
	var month = document.getElementById("month").value;
	var day = document.getElementById("day").value;
	var year = document.getElementById("year").value;
	if(month == 0 && day == 0 && year ==0){
		document.getElementById("err_birth").innerHTML = 'Enter your Birthdate';
		return false;
	}else{

		return true;
	}
}
function check_address(){
	var address = document.getElementById("a_address").value;
	if(address.length > 0){
		return true;
	}else{
		document.getElementById("err_address").innerHTML = 'Enter your address';
		return false;
	}
}
function check_gender(){
	var radios = document.getElementById("g_gender");
	var radios1 = document.getElementById("g_genders");

	if(radios.checked || radios1.checked){
		return true;
	}else{
		document.getElementById("err_gender").innerHTML = 'Enter your Gender';
		return false;
	}

}
function validate(){
	if(check_name() && check_surname() && check_birth() && check_gender() && check_address()){
		return true;
	}else{
		alert("Fill out the Form!!");
		return false;
	}
}
</script>

<br><h1>Registration Form</h1>
</font>
<font face = 'Modern No. 20'>
	
<form method = "post" action = "checker.php">
	<table background='w.jpg'>
		
		<tr>
			<td><b>First Name:</td>
			<td><input type = 'text' size = '30' name = 'f_name' id = 'f_name' onblur = 'check_name()'></td>
			<td><span id = 'err_name'></span>
		</tr>
		<tr>
			<td><b>Last Name</td>
			<td><input type = 'text' size = '30' name = 'l_name' id = 'l_name' onblur = 'check_surname()'></td>
			<td><span id = 'err_surname'></span>
		</tr>
	
			<tr>
			<td><b>Birth Date</td>
			<td><select size = '1' name = 'month' id = 'month' onblur = 'check_birth()'>
				<option value = '0'>Month</option>
				<option value = '1'>January</option>
				<option value = '2'>February</option>
				<option value = '3'>March</option>
				<option value = '4'>April</option>
				<option value = '5'>May</option>
				<option value = '6'>June</option>
				<option value = '7'>July</option>
				<option value = '8'>August</option>
				<option value = '9'>September</option>
				<option value = '10'>October</option>
				<option value = '11'>November</option>
				<option value = '12'>December</option>
			</select>
			<select size = '1' name = 'day' id = 'day' onblur = 'check_birth()'>
				<option value = '0'>Day</option>
				<?php 
					for($i = 1; $i <= 31; $i++){
						echo "<option value = ".$i.">".$i."</option>";
					}

				?>
			</select>

			<select size = '1' name = 'year' id = 'year' onblur = 'check_birth()'>
				<option value = '0'>Year</option>
				<?php 
					for($i = 1950; $i <= 2013; $i++){
						echo "<option value = ".$i.">".$i."</option>";
					}

				?>
			</select>
			<td><span id = 'err_birth'></span></td>
		</tr>
	
		<tr>
			<td><b>Address</td>
			<td><textarea cols ='35' row = '10' name = 'a_address' id = 'a_address' onblur = 'check_address()'></textarea></td>
			<td><span id = 'err_address'></span></td>
		</tr>
			<tr>
			<td><b>Gender</td>
			<td><input type = 'radio' name = 'g_gender' value = 'Male' id = 'g_gender' onblur = 'check_gender()'>Male<br>
				<input type = 'radio' name = 'g_gender' value = 'Female' id = 'g_genders' onblur = 'check_gender()'>Female</td>
				<td><span id = 'err_gender'></span></td>
		</tr>
		
	</table>
	<table background='w.jpg'>
		<tr>

			<td><input type = 'submit' value = 'Submit' name = 'save' onclick = 'return validate()'></td>
			<td><input type = 'reset' value = 'Clear' name = 'clear'></td>
</font>
		</tr>
	</table>

</center>
</html>

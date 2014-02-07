<?php
	include 'connect.php';
	include 'functions.php';
	
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$user = $_POST['user'];
	$bday = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	

	if(!empty($name) && !empty($lname) && !empty($user) && !empty($bday) && !empty($pass) && !empty($cpass) && !empty($gender) && !empty($address)){
		if($pass == $cpass){
			Insertguests($name, $lname, $user, $pass, $bday, $gender, $address);
		}else{
			echo "<script>alert('Invalid Password!!');window.location.href='SignUp.php';</script>";
		}

	}
?>
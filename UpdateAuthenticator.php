<?php
	
	include 'functions.php';
	
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$user = $_POST['user'];
	$bday = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
	$pass = $_POST['pass'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$id =  $_POST['id'];
			Update($id, $name, $lname, $user, $pass, $bday, $gender, $address);		
			echo "<script>alert('Succesfully Updated!!');window.location.href='Home.php';</script>";
		
?>
<?php
include "functions.php";
	$id = $_GET['id'];

	$res = deleteUser($id);
	echo "<script>alert('Successfully Deleted!!');window.location.href='index1.php';</script>";
?>
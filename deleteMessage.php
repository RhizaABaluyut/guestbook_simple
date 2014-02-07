<?php
include "functions.php";
	$id = $_GET['id'];

	$res = deleteMessage($id);
	echo "<script>alert('Successfully Deleted!!');window.location.href='sent.php';</script>";
?>
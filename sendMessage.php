<?php

include 'functions.php';
@$sender = $_SESSION['id'];

	if(!empty($_POST)){
		$receiver = $_POST['receiver'];
		$sender = $sender;
		$message = $_POST['message'];
		$subject = $_POST['subject'];
		$send = sendMessage($message, $subject, $receiver, $sender);
		if($send) echo "<script>alert('Successfully Sent!!');window.location.href='sent.php?id=$receiver';</script>";
	}

?>
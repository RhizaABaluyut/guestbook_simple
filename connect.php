<?php
	session_start();
	$host = 'localhost';
	$root = 'root';
	$password = '';
	$database = 'guestbook_db';

	mysql_connect($host, $root, $password) && mysql_select_db($database);
?>
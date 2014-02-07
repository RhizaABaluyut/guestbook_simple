<?php
	include 'connect.php';
	function loginAuthenticator($username, $pass){
		$query = "SELECT * from guests where username = '{$username}' and password = '{$pass}' LIMIT 0,1";
		$result = mysql_query($query);

		if(mysql_num_rows($result) > 0){
			$record = mysql_fetch_assoc($result);
			$access = $record['access'];
			$_SESSION = $record;
			if($access == '1'){
				header('location:index1.php');
			}else{
				header('location:Home.php');
			}
		}
	}

	function get($username, $password){
		
	}

	function Insertguests($fname, $lname, $username, $pass, $bday, $gender, $address){
		$query = "INSERT INTO guests (fname, lname, username, password, bday, gender, address) VALUES('$fname', '$lname', '$username', '$pass', '$bday', '$gender', '$address')";
		$result = mysql_query($query);
		$query = "SELECT * from guests where username = '{$username}' and password = '{$pass}' LIMIT 0,1";
		$result = mysql_query($query);
		if(mysql_num_rows($result) > 0){
			$record = mysql_fetch_assoc($result);
			$access = $record['access'];
			$_SESSION = $record;
		}
			header('location:Home.php');
	}

	function get_all_forms(){

		$que = "select * from guests";
		$get = mysql_query($que);
		$list = array();
		if(mysql_num_rows($get)>0){
			while($row = mysql_fetch_assoc($get)){
					$list[] = $row;
			}
		}
		return $list;
	}

	function get_result_forms($search){

		$query = "SELECT * from guests where fname LIKE '%{$search}%' or lname LIKE '%{$search}%' or address LIKE '%{$search}%'";
		$get = mysql_query($query);
		$list = array();
		if(mysql_num_rows($get)>0){
			while($row = mysql_fetch_assoc($get)){
					$list[] = $row;
			}
		}
		return $list;
	}

	function Update($id, $fname, $lname, $username, $pass, $bday, $gender, $address){
		$query = "UPDATE guests SET fname = '{$fname}',lname = '{$lname}',bday = '{$bday}',gender = '{$gender}',address = '{$address}', password = '{$pass}', username = '{$username}' where id = '{$id}'";
		$result = mysql_query($query);
	}

	 function getReceiver($id){
		$query = "SELECT * FROM guests WHERE id = '{$id}'";
		$result = mysql_query($query);
		$rec = mysql_fetch_assoc($result);
		return $rec;
	}

	function sendMessage($message_body, $message_subj, $receiver, $sender){

		$query = "INSERT INTO messages(message_body, date_sent, message_subject, receiver, sender, is_sent)" . 
			"VALUES('{$message_body}', (SELECT current_date()), '{$message_subj}', {$receiver}, {$sender}, 1)";
			$res = mysql_query($query);
			if(mysql_affected_rows() > 0){
				return true;
			}else{
				return false;
			}
	}

	function getSentItemsofUser($id){
		$query = "SELECT m.*, u.fname as name FROM messages m JOIN guests u ON(u.id = m.receiver) WHERE sender = {$id}";
		$result = mysql_query($query);

			if(mysql_num_rows($result) > 0){
			$record = array();
			
			while($rec = mysql_fetch_assoc($result)){
				$record[] = $rec;
			}

			return $record;

			}else{
				return NULL;
			}
	}

	function deleteMessage($id){
	$query = "DELETE FROM messages WHERE message_id ={$id}";
	$result = mysql_query($query);	
	return $result;
}
	function getSentItemsofAllUsers(){
		$query = "SELECT * from messages as m JOIN guests as g on(m.receiver = g.id)";
		$result = mysql_query($query);

			if(mysql_num_rows($result) > 0){
			$record = array();
			
			while($rec = mysql_fetch_assoc($result)){
				$record[] = $rec;
			}

			return $record;

			}else{
				return NULL;
			}
	}

		function deleteUser($id){
		$query = "DELETE FROM guests WHERE id ={$id}";
		$result = mysql_query($query);	
			return $result;
}	

		function Sender($id){
		$query = "SELECT * FROM guests WHERE id ={$id}";
		$result = mysql_query($query);	
		$rec = mysql_fetch_assoc($result);
			return $rec;
}	
		function User($id){
		$query = "SELECT * FROM guests WHERE id ={$id}";
		$result = mysql_query($query);	
		$rec = mysql_fetch_assoc($result);
			return $rec;
}	
		function Forward($id){
			$query = "SELECT * FROM messages where message_id = {$id}";
			$result = mysql_query($query);
			$get = mysql_fetch_assoc($result);
				return $get;
		}

?>
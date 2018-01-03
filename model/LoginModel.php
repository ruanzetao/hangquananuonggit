<?php
require_once('DbModel.php');
class LoginModel extends DbModel{

	function login($username,$password){
		$con=$this->connect();

		$sql='select * from `users` where username="'.$username.'" and password="'.$password.'" ';
		$result=$con->query($sql);
		return $user = mysqli_fetch_assoc($result);
	}

}

?>

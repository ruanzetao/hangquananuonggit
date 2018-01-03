<?php

class DbModel{
	public function connect(){
		$con=mysqli_connect('localhost','root','','githq');
		if(mysqli_connect_errno()){
			echo "Fail nha cung";
		}

		return $con;
	}
}

?>
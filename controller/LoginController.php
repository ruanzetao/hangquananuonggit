<?php

require_once('model/LoginModel.php');
// include 'DataAccessHelper.php';

// $username ="";
// $password = "";


// if(isset($_POST["username"]))
// $username = $_POST["username"];

// if(isset($_POST["password"]))
// $password = $_POST["password"];


// //Insert to db
// $db = new DataAccessHelper;
// $db -> connect();
// $result = $db -> executeQuery("SELECT * FROM account WHERE username = '$username' AND password = '$password';");
// if ($result->num_rows > 0)
// {
// 	header ('Location: blank.php');
// }
// else
// {
// 	header ('Location: blankfail.php');
// }
// $db -> close();


class LoginController{
	public function getUser(){
		$username=isset($_POST['uname'])?$_POST['uname']:'';
		$password=isset($_POST['psw'])?$_POST['psw']:'';

		if($password!=''&&$username!=''){
			$loginmodel=new LoginModel();
			$result=$loginmodel->login($username,$password);

			if($result>0){
				echo "Dang nhap thanh cong";
			}
			else{
				require_once('view/testlogin.php');
				echo "Dang nhap that bai";
			}

			}else{
				require_once('view/testlogin.php');
			}
	}
}


?>

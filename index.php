<?php

$controller=isset($_GET['controller'])?$_GET['controller'].'Controller':'LoginController';

$action=isset($_GET['action'])?$_GET['action']:'getUser';

require_once('controller/LoginController.php');

$logincontroller=new $controller();

$logincontroller->$action();
?>
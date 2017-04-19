<?php
require_once '../inc/db.php';
require_once '../inc/common.php';

$name = trim($_POST['name']);
if($_POST['password'] == $_POST['password2']){
	$query = $db->prepare('select * from user where user_name = :name');
	$query->bindParam(':name',$name,PDO::PARAM_STR);		
	$query->execute();
	if($query->fetchObject()){	
		redirect_to("new.php?notice=".urlencode('用户名已存在'));
	}else{
		$pwd = hash_hmac('sha256', $_POST['password'], 'xxxxxxx234dsf@sdf'); 

		$sql = "insert into user(user_name,user_password) values(:name, :password);" ;	
		$query = $db->prepare($sql);
		$query->bindParam(':name',$name,PDO::PARAM_STR);
		$query->bindParam(':password',$pwd,PDO::PARAM_STR);
		
		if (!$query->execute()) {	
			print_r($query->errorInfo());
		}else{
			redirect_to("../users/");
		};
	}
}else{
	redirect_to('new.php?notice='.urlencode('两次密码不一致'));	
}


?> 
	





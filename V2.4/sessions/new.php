<?php 
require_once '../inc/session.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户</title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />
<body>   
<div>	
	<h1> 用户登录 </h1>
	
	
	<?php	
		if(has_notice()) { 
	      echo get_notice();
	      clean_notice();
	} ?>
	
	<br><br>
	<form action="save.php" method="post">
	   姓名<input type="text" name="name" />
	   <br/><br>
	   密码<input type="password" name="password" /><br><br>
	   <input type="submit" value="提交"/>
	   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	   <a href="../index.php">返回首页</a>
	</form>
</div>
</body></html>


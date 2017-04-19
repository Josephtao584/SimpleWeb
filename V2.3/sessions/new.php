<?php 
require_once '../inc/session.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户</title>
</head>
<body>   	
	<h1> 用户登录 </h1>
	
	<div id="notice"  style="background-color:red;">
	<?php	
		if(has_notice()) { 
	      echo get_notice();
	      clean_notice();
	} ?>
	</div>

	<form action="save.php" method="post">
	   姓名<input type="text" name="name" />
	   <br/>
	   密码<input type="password" name="password" />
	   <input type="submit" value="提交"/>
	</form>

</body></html>



<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>用户</title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />
<body>   	
<div>
	<h1> 注册新用户 </h1>

 		<p style="color: red"><?php if(isset($_GET['notice'])) echo $_GET['notice']; ?><p>
 

	<form action="save.php" method="post">
	   姓名<input type="text" name="name" />
	   <br/><br/>
	   密码<input type="password" name="password" />
	   <br/><br/>
		 密码2<input type="password" name="password2" /><br/><br/>
	   <input type="submit" value="注册"/>

	</form>
</div>
</body></html>


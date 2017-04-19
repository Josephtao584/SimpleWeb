<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>new | 博客</title>
</head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<body><div>
<h1>New post</h1>
<form action="save.php" method="post">
	<label for="id">id:</label><br>
	<input type="text" name="id" value="<?php echo $_GET['id'] +1;?>" /><br>
	<label for="title">title:</label><br>
	<input type="text" name="title" value="" /><br>
	<br/>
	<label for="body">body:</label><br>
	<textarea name="body" cols="30" rows="6"></textarea>
	<br/><br>
	<input type="submit" value="提交" /><br><br>
</form>
 <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1094222706,3048544335&fm=23&gp=0.jpg" title="博客"> </div>
</body>
</html>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>delete | 博客</title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />
<body>	
<div>
	<?php 
		$id = $_GET['id']; 
		$name = $_GET['name']; 
	?>

	<form action="destroy.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		是否删除名称为<?php echo $name; ?>的用户?
		<input type="submit" value="确定">
	</form>	<br><br>

	 <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1094222706,3048544335&fm=23&gp=0.jpg" title="博客"> 
	 </div>
</body>
</html>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>edit | 博客 </title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />
<style>
</style>
<body>
<div>
	<?php 
	    require_once '../inc/db.php';

		$id = $_GET['id'];	 
		$query = $db->query("select * from user where user_id = {$id}");
		$post = $query->fetchObject();
	?>
	<h1>更改用户 <?php echo $post->user_name;?> 名称</h1>

	<form action="update.php" method="post">
		<input type="hidden" name="user_id" value = "<?php echo $id; ?>"/>
		<label for="user_password">新名称:</label>
		<input type="text" name="user_name" value="<?php echo $post->user_name;?>" />
		<br/><br>
		<input type="submit" value="提交" /><br><br>
		<img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1094222706,3048544335&fm=23&gp=0.jpg" title="博客"> 
	</form>
	</div>
</body>
</html>
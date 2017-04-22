<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>edit | 博客 </title>
</head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<style>
</style>
<body>
<div>
	<?php 
	    require_once '../inc/db.php';

		$id = $_GET['id'];	 
		$query = $db->query("select * from blog where id = {$id}");
		$post = $query->fetchObject();
	?>
	<h1>edit post:<?php echo $post->id;?> </h1>

	<form action="update.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		<label for="title">title:</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" />
		<br/>
		<label for="body">body:</label>
		<br>
		<textarea name="body" cols="30" rows="6" ><?php echo $post->body;?></textarea>
		<br/>
		<input type="submit" value="提交" /><br><br>
		<img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1094222706,3048544335&fm=23&gp=0.jpg" title="博客"> 
	</form>
	</div>
</body>
</html>
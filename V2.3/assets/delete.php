<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>delete | 博客</title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />

<body>	
<div>
	<?php $id = $_GET['id']; ?>
	<form action="destroy.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		是否删除ID为<?php echo $id; ?>的帖子?
		<input type="submit" value="确定">
	</form>	
</div>
</body>
</html>
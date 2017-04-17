<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>改|博客</title>
</head>
<link href='./css/style.css' rel="stylesheet" type="text/css" />
<body>
	<?php 
error_reporting(0); 
// mysql_connect('localhost','root','') or die('can`t work');
// mysql_query("SET NAMES utf8");    
// mysql_select_db('phpdemo');
require_once './inc/db.php';
require_once './inc/common.php';
$id = $_POST['id'];
$sql = "update blog set title = '{$_POST['title']}', body = '{$_POST['body']}' where id = {$_POST['id']};" ;	
if (!mysql_query($sql)) {
	echo mysql_error();	
	echo '<br>' .  $sql;
	die("update fail");
}else{
	redirect_to("show.php?id={$id}");
}
?>
<<!-- h1>修改成功</h1>
<h3><a href="http://www.good.com/V1.0/">返回首页</a>></h3>
<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1492360968038&di=4f708b59af5b6e9479e152d5db77ffec&imgtype=0&src=http%3A%2F%2Fimg2.16pic.com%2F00%2F07%2F81%2F16pic_781804_s.jpg" title="博客"> -->
</body>
</html>



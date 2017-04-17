<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>show | 博客</title>
</head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<body>
  <?php        
    // mysql_connect('localhost','root','') or die('can`t work');
    // mysql_query("SET NAMES utf8");    
    // mysql_select_db('phpdemo');
   require_once './inc/db.php';

    $id = $_GET['id'] ;
    $sql = 'select * from blog where id = ' . $id;
    if(!$sql){
      die(mysql_error());
    }
    $query = mysql_query($sql);
    $post = mysql_fetch_object($query);
  ?>

  <h1><?php echo $post->id; ?> : <?php echo $post->title; ?>  </h1>
  <p><?php echo $post->body; ?></p>
  <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1094222706,3048544335&fm=23&gp=0.jpg" title="博客"> 

</body>
</html>
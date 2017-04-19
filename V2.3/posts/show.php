<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>show | 博客</title>
</head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<body>
<div>
  <?php        
    // mysql_connect('localhost','root','') or die('can`t work');
    // mysql_query("SET NAMES utf8");    
    // mysql_select_db('phpdemo');
   require_once '../inc/db.php';

    $id = $_GET['id'] ;
    $sql = 'select * from blog where id = ' . $id;
    $query = $db->query($sql);
    $post = $query->fetchObject();
  ?>

  <h1><?php echo $post->id; ?> : <?php echo $post->title; ?>  </h1>
  <p><?php echo $post->body; ?></p>

  <h3>评论</h3>
   <ol>
  <?php
    $id = $_GET['id'] ;
    $sql = 'select * from comments where post_id = ' . $id;
     if(!$sql){
      die(mysql_error());
    }
   $query = $db->query($sql);
    while ( $comment = $query->fetchObject() ) {
      ?>
          <li>
            <h4><?php echo $comment->title; ?></h4>
            
            <p><?php echo $comment->body; ?> 
            <?php echo "          ".date('Y-m-d',strtotime($comment->created_at));?>   </p>        
          </li> 
    
    <?php  } ?>
    </ol>
    <br>
    添加评论: <br><br>
   <form action="../comments/save.php" method="post">
    <input type="hidden" name='post_id' value='<?php echo $_GET['id']; ?>'/>
    <label for="title">title:</label>
    <input type="text" name="title" value="" />
    <br/><br>
    <label for="body">body:</label>
    <textarea name="body"></textarea><br>

    <br/>
    <input type="submit" value="提交" />
  </form>
  
   <br/>
   <a href="index.php">返回首页</a>
   <br>
   <br>


  <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1094222706,3048544335&fm=23&gp=0.jpg" title="博客"> 
</div>
</body>
</html>
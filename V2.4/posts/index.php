<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 博客</title>
</head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<body>
  <?php
    require_once '../inc/session.php';
    require_once '../inc/db.php';
  ?>
  <?php if(is_login()) echo '当前用户: ' . current_user()->user_name ;?>
<div id =div1>
 <?php if(is_login())
 {
  ?>
<a href="../sessions/delete.php">登出</a>
<a href="../users/">管理用户</a>
<a href="../assets/index.php">管理文件</a>
<?php }else{?>
<a href="../sessions/new.php">登陆</a>
<a href="../users/new.php">注册</a>
<?php }?>

</div>

<div>
  <table border=1>
    <caption><h1>帖子列表</h1></caption>
    <thead>
      <tr>
        <th>id</th>
        <th>标题</th>
        <th>创建日期</th>
      <?php if(is_login()) {?>
        <th>操作</th> 
      <?php }?>
       
      </tr>
    </thead>
    <tbody>
      <?php 
        // $posts = Array(
        //     Array('id'=>'1','title'=>'第1篇帖子','created_at'=>'2012-1-1  21:07:57'),
        //     Array('id'=>'2','title'=>'第2篇帖子','created_at'=>'2012-2-2  21:07:57'),
        //     Array('id'=>'3','title'=>'第3篇帖子','created_at'=>'2012-3-3  21:07:57')
        //   );
        // foreach ($posts as $post) 
        require_once '../inc/db.php';

        // $sql = 'select * from blog';
        // $query = mysql_query($sql);
        $max = 0;
        $query = $db->query('select * from blog');
        while ( $post =  $query->fetchObject() ) {
          $max = $post->id>$max?$post->id:$max;
      ?>

          <tr>
            <td><?php echo $post->id; ?></td>
            <td><a href="show.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></td>
            <td><?php echo $post->created_at; ?></td> 
            <?php if(is_login()) {?>
            <td> 
              <a href="edit.php?id=<?php echo $post->id; ?>">改</a> 
              <a href="delete.php?id=<?php echo $post->id; ?>">删</a> 
            </td>        
            <?php }?>
          </tr> 
 
      <?php  } ?>
  
    </tbody>
  </table>
  <a href="new.php?id=<?php echo $max;?>">新增</a>
    <br> <br>
  <img src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1830435793,708821523&fm=23&gp=0.jpg" title="欢迎"> 
  </div>
</body>
</html>



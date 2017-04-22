<?php 

require_once '../inc/session.php';
require_once '../inc/pager.php';
require_once '../inc/db.php';
if(isset($_GET['page']))
  $page = $_GET['page'];
else
  $page = 1;
 $query = pager_query('select * from blog ',$nav_html,$page);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 博客</title>
</head>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<body>
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
      
        while ( $post =  $query->fetchObject() ) {
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
  <a href="new.php?>">新增</a>
  <?php echo $nav_html; ?> 
    <br> <br>
  <img src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1830435793,708821523&fm=23&gp=0.jpg" title="欢迎"> 
  </div>
</body>
</html>



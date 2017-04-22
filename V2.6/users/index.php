<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>用户列表 - 博客</title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />
<body>
<div>
  <table border=1>
    <caption><h1>用户列表</h1></caption>
    <thead>
      <tr>
        <th>id</th>
        <th>姓名</th>
        <th>创建日期</th>
        <th>操作</th>        
      </tr>
    </thead>
    <tbody>
      <?php 

        require_once '../inc/db.php';
        
        $query = $db->query('select * from user');
        while ( $user =  $query->fetchObject() ) {
          
      ?>
          <tr>
            <td><?php echo $user->user_id; ?></td>
            <td><?php echo $user->user_name; ?></a></td>
            <td><?php echo date('Y-m-d',strtotime($user->user_created_time));?></td>
            <td> 
              <a href="edit.php?id=<?php echo $user->user_id; ?>">改</a> 
              <a href="delete.php?id=<?php echo $user->user_id; ?>&name=<?php echo $user->user_name?>">删</a> 
            </td>        
          </tr> 
 
      <?php  } ?>
  
    </tbody>
  </table>
  <a href="new.php">新增</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href="../">返回首页</a>
  </div>
</body>
</html>



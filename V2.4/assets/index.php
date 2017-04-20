<?php 

require_once '../inc/session.php';
require_once '../inc/db.php';

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 博客</title>
</head>
<link href="../posts/css/style.css" rel="stylesheet" type="text/css" />
<body>  
<div>
  <div id="notice"  style="background-color:white;">
  <?php 
    if(has_notice()) { 
        echo get_notice();
        clean_notice();
  } ?>
  </div>

  <table border=1>
    <caption><h1>附件列表</h1></caption>
    <thead>
      <tr>
        <th>id</th>
        <th>标题</th>
        <th>创建日期</th>
        <th>操作</th>        
      </tr>
    </thead>
    <tbody>
      <?php 
        $query = $db->query('select * from assets');
        while ( $asset =  $query->fetchObject() ) {
          
      ?>
          <tr>
            <td><?php echo $asset->id; ?></td>
            <td><a href="../uploads/<?php echo $asset->file; ?>"><?php echo $asset->title; ?></a></td>
            <td><?php echo date('Y-m-d',strtotime($asset->created_time));?></td>
            <td>               
              <a href="delete.php?id=<?php echo $asset->id; ?>">删</a> 
            </td>        
          </tr> 
 
      <?php  } ?>
  
    </tbody>
  </table>
  <a href="new.php">新增</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="../">返回首页</a>
  </div>
</body>
</html>



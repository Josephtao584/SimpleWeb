<?php 

require_once '../inc/db.php';
require_once '../inc/common.php';
// $sql = "insert into comments(title,body,post_id) values('{$_POST['title']}','{$_POST['body']}','{$_POST['post_id']}');" ;  
$sql = "insert into comments(title,body,post_id) values(:title, :body,:post_id);" ;  
$query = $db->prepare($sql);
$query->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindParam(':body',$_POST['body'],PDO::PARAM_STR);
$query->bindParam(':post_id',$_POST['post_id'],PDO::PARAM_INT);

if (!$query->execute()) { 
  print_r($query->errorInfo());
}else{
  redirect_to("../posts/show.php?id=" . $_POST['post_id']);
};

?>
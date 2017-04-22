<?php  
// require_once '../inc/db.php';
// require_once '../inc/common.php';
// $user_id = $_POST['user_id'];
// $user_password = $_POST['user_password'];
// $sql = "update user set user_password = '{$user_password}' where user_id = {$user_id};" ;
// $query = $db->prepare($sql);
// // $sql = "update user set user_password = '{$_POST['user_password']}' where id = {$_POST['user_id']};" ;	
// if (!$query = execute()) {
// 	print_r($query->errorInfo());
// 	die("update fail");
// }else{
// 	redirect_to("index.php");
// 	<?php 

require_once '../inc/db.php';
require_once '../inc/common.php';

$sql = 	"update user set user_name = :user_name where user_id = :user_id;" ;
$query = $db->prepare($sql);
$query->bindValue(':user_name',$_POST['user_name'],PDO::PARAM_STR);
$query->bindValue(':user_id',$_POST['user_id'],PDO::PARAM_INT);
if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	redirect_to("./");
};


?>



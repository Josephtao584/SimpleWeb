<?php 

require_once '../inc/db.php';
require_once '../inc/common.php';
// $id = $_POST['id'];
// $sql = 	"delete from blog where id = {$id};" ;	
// if (!mysql_query($sql)) {
// 	echo mysql_error();	
// 	echo '<br>' .  $sql;
// }else{
// 	redirect_to("./");
// };
$id = $_POST['id'];
$sql = 	"delete from comments where c_id = {$id};" ;		
$query = $db->prepare($sql);
//$query->bindValue(':id',$_POST['id'],PDO::PARAM_INT);

if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	redirect_to("../posts/");
};


?>
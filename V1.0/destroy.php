<?php 

require_once './inc/db.php';
require_once './inc/common.php';
$id = $_POST['id'];
$sql = 	"delete from blog where id = {$id};" ;	
if (!mysql_query($sql)) {
	echo mysql_error();	
	echo '<br>' .  $sql;
}else{
	redirect_to("./");
};

?>
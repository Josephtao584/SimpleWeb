<?php 

require_once './inc/db.php';
require_once './inc/common.php';

$sql = 	"insert into blog(id,title,body) values('{$_POST['id']}','{$_POST['title']}', '{$_POST['body']}' ) ;" ;	
if (!mysql_query($sql)) {
	echo mysql_error();	
	echo '<br>' .  $sql;
}else{
	redirect_to("./");
};

?>
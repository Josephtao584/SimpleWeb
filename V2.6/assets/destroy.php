<?php 
require_once '../inc/session.php';

$query = $db->prepare('select * from assets where id = :id');
    $query->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
    $query->execute();
    $resource = $query->fetchObject();    


$sql = 	"delete from assets where id = :id" ;	
$query = $db->prepare($sql);
$query->bindValue(':id',$_POST['id'],PDO::PARAM_INT);

if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	// rm on linux
	unlink(  $_SERVER['DOCUMENT_ROOT'] . 'uploads/' . $resource->file ) ;		
	set_notice( 'del ok') ;		
	redirect_to("./");

};

?>
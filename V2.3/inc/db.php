<?php 

// mysql_connect('localhost','root','') or die('can`t work');
// mysql_query("SET NAMES utf8");    
// mysql_select_db('phpdemo');
	try{
	$db = new PDO("mysql:host=127.0.0.1;dbname=phpdemo;","root","");
	$db->query("SET NAMES 'utf8'");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch (PDOException $e){
	echo $e->getMessage() . '<br/>';
}
?>
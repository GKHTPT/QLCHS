<?php
include_once('Db_mysql.php');
class Users
{
	
	function __construct(){
	
	}	
	
	function getAllUser(){
		$query ='tag=getAllUser';
		$db_mysql = new Db_mysql($query,'GET');
		return $db_mysql -> getResult();
		
	}


}
?>
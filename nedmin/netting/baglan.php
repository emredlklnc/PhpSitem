<?php 

try 
{

	$db=new PDO("mysql:host=localhost;dbname=blog",'root','05314566885');
	
} 
catch (PDOException $e) 
{
	echo $e->getMessage();
}


 ?>
<?php

//Establishing MySql Connection
$conn = new mysqli("localhost","root","","womens_products");

if($conn->connect_error){
	die("Not connected".$conn->connect_error);
}else{
	#echo"Connected Successfully";
}

?>
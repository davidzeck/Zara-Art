<?php

//Establishing MySql Connection
$conn = new mysqli("localhost","root","","zara-art");

if($conn->connect_error){
	die("Not connected".$conn->connect_error);
}else{
	#echo"Connected Successfully";
}

?>
<?php
// include('../pages/login.php');

function registration(){
    include("../connect.php");
    $email=$_POST['email'];
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $sendTo=$_POST['sendTo'];
    $address=$_POST['address'];
    $dropOff=$_POST['dropOff'];
    $tNumber=$_POST['tNumber'];
    $password=$_POST['password'];
    $sql_reg="INSERT INTO users(id,email,password,firstName,lastName,SendTo,Address,dropOff,telephoneNumber)
    VALUE(NULL,'$email','$password','$fName','$lName','$sendTo','$address','$dropOff','$tNumber');";
    if($conn->query($sql_reg)===True){
        echo "Data inserted"; 
        //header('location:login.php'); 
    }
    else{
        echo "Error".$conn->error;
    }
}

registration();
?>
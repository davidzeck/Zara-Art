<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>
    <p> LOGIN</p>
</body>
</html>

<!-- 
//  $conn=new mysqli("localhost","EDavid","Edso8939!","pizza_kingdom");

//  if($conn->connect_error){
//     die("Not connected".$conn->connector_error);
// }
// else{
//     echo"Connected Successfully";
// }
// if(isset($_POST['user_Name'])){
//     $uname=$_POST['user_Name'];
//     $pass_word=$_POST['user_password'];
     
//     $sqlc="SELECT * FROM customers WHERE userName='$uname' AND Passwords ='$pass_word';";
//     $sqlc_name="SELECT * FROM customers WHERE userName='$uname'";

//     $result=$conn->query($sqlc);
//     $result2=$conn->query($sqlc_name);
    
//     $sqla="SELECT * FROM admin WHERE userName='$uname' AND Passwords ='$pass_word';";
//     $sqla_name="SELECT * FROM admin WHERE userName='$uname'";

//     $resulta=$conn->query($sqla);
//     $result2a=$conn->query($sqla_name);
//     if(isset($_POST["user_type"])){
//         $user_type=$_POST["user_type"];
//     }
//     else{
//         $user_type=NULL;
//     }
//     if($result->num_rows>0||$resulta->num_rows>0){
//         if($user_type != NULL){
//             if($user_type !="Admin"){
//                 if(mysqli_num_rows($result)>0){
//                     $_SESSION["user"]=$_POST["user_Name"];
//                     while($row=$result->fetch_assoc()){
//                         $rows[]=$row;
//                     $_SESSION['userId']=$row['CustomerId'];
//                     }
//                     header("location: homepage.php");
//                     echo"Logged in successfully";
//                     exit();
//                 }
//                 else if(mysqli_num_rows($result2)>0 && mysqli_num_rows($result)<1){
//                     $incorrect_pass="Incorrect Password";
//                 }
//                 else{
//                     $incorrect_user="User is not there,Kindly register";
//                 }
//             }
//             else{
//                 if(mysqli_num_rows($resulta)>0){
//                     $_SESSION["user"]=$_POST["user_Name"];
//                     $row=$resulta->fetch_assoc();
//                         $rows[]=$row;
//                     $_SESSION['userId']=$row['adminId'];
                    
//                     header("location: process.php");
//                     echo"Logged in successfully";
//                     exit();
//                 }
//                 else if(mysqli_num_rows($result2a)>0 && mysqli_num_rows($resulta)<1){
//                     $incorrect_pass="Incorrect Password";
//                 }
//                 else{
//                     $incorrect_user="User is not there,Kindly register";
//                 }
//             }
            
//         }
//         else{
//             echo"Kindly select a user";
//         }
//     }


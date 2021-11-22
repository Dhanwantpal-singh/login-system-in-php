<?php

include '../db/config.php';
// extract($_POST);
session_start();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$pass1 = $_POST['password'];
$pass=md5($pass1);
$sql= "select * from tbl_user where email = '$email' and pass = '$pass'";
$result = $conn->query($sql);

if($result->num_rows>0){
    $row  = $result->fetch_assoc();
    
    $_SESSION['user_id'] = $row['user_id'];   
    $_SESSION['username'] = $row['Name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['role'];

    header('location:../dashboard');  // redirecting to dashboard
   
}
else{
    $_SESSION['msg']="Incorrect Username or Password";
    $_SESSION['type']="danger";
    $_SESSION['show']="yes";
    header('location:../login');  // redirecting to login page
    
}
}
?>
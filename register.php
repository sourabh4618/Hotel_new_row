<?php
session_start(); 
if(isset($_POST['submit'])){
include "db_conn.php";

if($conn){
    
    $name=$_POST['user_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql="INSERT INTO users(user_name,password,email) VALUES('$name','$password','$email')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Registration is Successful')</script>";
        header("Location: index.php");
    }
    else{
        echo "<script>alert('Failed')</script>";
    }
}
}
?>
<?php
if(isset($_POST['forgot'])){
include "db_conn.php";
if($conn) {
  
    $fname=$_POST['name'];
    
    $email=$_POST['mail'];
    
    $cmt="SELECT user_name,email FROM users WHERE user_name='$fname' AND email = '$email'";
    $rslt=mysqli_query($conn,$cmt);
    if(mysqli_num_rows($rslt)>0){
        $pass=$_POST['password'];
        $cnpass=$_POST['cnpassword'];
        if($pass==$cnpass){
            $cmt="UPDATE users SET password = '$pass' WHERE user_name='$fname' AND email = '$email'";
            $rslt=mysqli_query($conn,$cmt);
            if($rslt){
                echo "<script>alert('password changed');</script>";
                header("Location: index.php");
            }else{
                echo "<script>alert('oops! something wrong');</script>";
            }
        }else{
            echo "<script>alert('password not match');</script>";
        }
    }else{
        echo "<script>alert('user not found');</script>";
    }
}
}else{
    echo "<script>alert('not connected.);</script>";
}
?>
<?php
error_reporting(0);
session_start();

if(isset($_POST['comment_button'])){
  
    include "db_conn.php";
    // $server="localhost";
    // $username="Sourabh";
    // $password="sourabh@4618";
    // $database="sou_database";

    // $conn=mysqli_connect($server,$username,$password,$database);

    if($conn) {
        
        // $email=$_SESSION['Email'];
        $name=$_SESSION['user_name'];
        // if(isset($_POST['button'])){
       
        $cmnt=$_POST['cmnts'];
        $sql="INSERT INTO cmnt(user_name,cmnts) VALUES('$name','$cmnt')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('added Successful')</script>";
            header("Location: home.php#comment");
        }
    }
    
}
    ?>
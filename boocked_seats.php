<?php
error_reporting(0);
session_start();

if(isset($_POST['contact_button'])){
  
    include "db_conn.php";

    if($conn) {
        
        $email=$_POST['email'];
        $name1=$_POST['first_name'];
        $name2=$_POST['last_name'];
        $phone=$_POST['phone'];
        $company=$_POST['company'];
        $nature=$_POST['nature'];
        $date=$_POST['date'];
        $stime=$_POST['stime'];
        $etime=$_POST['etime'];
        $people=$_POST['people'];
        $addition=$_POST['addition'];
        $name=$_SESSION['user_name'];
        
        $sql="INSERT INTO book(email,first_name,last_name,phone,company,nature,date,stime,etime,people,addition,user_name) VALUES('$email','$name1','$name2','$phone','$company','$nature','$date','$stime','$etime','$people','$addition','$name')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('added Successful')</script>";
            header("Location: pe.php");
        }
    }
    
}
    ?>
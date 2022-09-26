<?php 
session_start();
    include "db_conn.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bk.css">
    <title>Document</title>
</head>
<body>
  
        <div class="div1">
        <img src="Images/logo.png" class="logo_img" alt="">
            <center>
            <div class="div11">
            <h1>HOTEL NEW ROW</h1>
            <nav>
            <ul>
                    
                    <li><a href="menu.php" >Menu</a></li>
                    <li><a href="home.php#div3">About</a></li>
                    <li><a href="home.php#top">Top Dishes</a></li>
                    <li><a href="pe.php"> <u>Private Events</u> </a></li>
                    <!-- <li><a href="#res">Reservation</a></li> -->
                    <li><a href="home.php" >Home</a></li>
                </ul>
            </nav>
            </div>
            </center>
            <center>
             <br>
                <div class="all_cmnt">
                    <h2 class="cmnt">Boocked Seats</h2>
                    <?php
                    //  $cmt="SELECT user_name FROM cmnt";
                     $book_t="SELECT email,first_name,last_name,phone,company,nature,date,stime,etime,people,addition,user_name FROM book";
                    //  $lastname="SELECT last_name FROM book";
                    //  $email="SELECT email FROM book";
                    //  $phone="SELECT phone FROM book";
                    //  $company="SELECT company FROM book";
                    //  $nature="SELECT nature FROM book";
                    //  $date="SELECT date FROM book";
                    //  $stime="SELECT stime FROM book";
                    //  $etime="SELECT etime FROM book";
                    //  $people="SELECT people FROM book";
                    //  $addition="SELECT addition FROM book";
                     $rslt=mysqli_query($conn,$book_t);
                     if (mysqli_num_rows($rslt) > 0) {
                         while ($row = mysqli_fetch_assoc($rslt)) {
             
                    ?>
                    <div class="dsply_cmnt">
                        
                        <table>
                            <tr>
                                <td colspan="2"><h2 class="cmt_name"> <?php echo $row['user_name'];?></h2></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></p></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['email'];?></p></td>
                            </tr>
                            <tr>
                                <td>Phone.no</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['phone'];?></p></td>
                            </tr>
                            <tr>
                                <td>Company</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['company'];?></p></td>
                            </tr>
                            <tr>
                                <td>Nature of event</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['nature'];?></p></td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['date'];?></p></td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['stime'];?> to <?php echo $row['etime'];?></p></td>
                            </tr>
                            <tr>
                                <td>No. of People</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['people'];?></p></td>
                            </tr>
                            <tr>
                                <td>Additional Information</td>
                                <td>:</td>
                                <td><p class="cmt_para"><?php echo $row['addition'];?></p></td>
                            </tr>
                        </table>
                        
                    </div>
                    <?php 
                    }
                    }
                    ?>
                </div>
            <br>
        </div>
    </center>
</body>
</html>


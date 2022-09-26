<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    include "db_conn.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_home.css">
    <title>Document</title>
</head>
<body>
    <img src="Images/logo.png" class="logo_img" alt="">
    <center>
    <div class="div1">
        <div class="div11">
        <h1>HOTEL NEW ROW</h1>
        <nav>
            <ul>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="#div3">About</a></li>
                <li><a href="#top">Top Dishes</a></li>
                <li><a href="pe.php">Private Events</a></li>
                <!-- <li><a href="#res">Reservation</a></li> -->
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        </div>
        <h3 id="div_h2" style="padding-top:300px;font-size:80px;color: darkorange;text-transform:uppercase;font-family: 'Courier New', Courier, monospace;text-shadow:-2px -2px 2px white;">Welcome <?php echo $_SESSION['user_name']; ?></h3>
    </div>
    </center>
     
    <center>
    <div class="div2">
        <div class="div21">
            <h4>Address</h4> <br>
            <p>809 w Fandolph St</p>
            <p>Chicago, IL</p>
        </div>
        <div class="div21">
            <h4>Hours</h4> <br>
            <p>Sunday - Thursday</p>
            <p>4:30 pm - 10:00 pm</p> <br>
            <p>Friday-Saturday</p>
            <p>4:30 pm - 11:00 pm</p>
        </div>
        <div class="div21">
            <h4>Contact</h4> <br>
            <p>312.492.6262</p>
            <p>info@girlandthegoat.com</p>
        </div>
    </div>
    </center>

    <center>
    <div class="div3" id="div3" >
        <h3>About</h3> 
        <img src="Images/food3.jfif" alt="">
        <p>As one of the first restaurants on Chicago’s famed Restaurant Row in the West Loop, Stephanie Izard’s Girl & the Goat began in 2010 with a goal of serving bold, global flavors to our local community (and visitors!). Since then, our desire to treat guests like family has remained the same (as have our Green Beans) – but our seasonal flavors, cocktails, wine and locally-rooted beer are ever-changing.</p><br> 
        <p>We love restaurants as much as you do. That’s why we’ve been helping them fill tables since 1999. Whether you’re browsing for a quick bite or planning a big night, Restaurant.com will help you discover the perfect dining experience. Your new favorite restaurant is out there – go ahead, dig in!</p>
    </div>
    </center>

    <center>
        <div class="top" id="top" >
            <h2>Top Dishes</h2> 
            <hr class="hr">
            <div class="top-flex">
                <div class="top1">
                    <center>
                    <img src="Images/chicken kadai.jpg" alt="">
                    <hr>
                    <h6>Chicken Kadai</h6>
                    <p>₹210</p>
                    </center>
                </div>
                <div class="top1">
                <center>
                    <img src="Images/767257.jpg" alt="">
                    <hr>
                    <h6>Pizza</h6>
                    <p>₹180</p>
                    </center>
                </div>
                <div class="top1">
                <center>
                    <img src="Images/grilled chicken.jpg" alt="">
                    <hr>
                    <h6>Grilled Chiken</h6>
                    <p>₹420</p>
                    </center>
                </div>
                <div class="top1">
                <center>
                    <img src="Images/fried chicken.jpg" alt="">
                    <hr>
                    <h6>Fried Chicken</h6>
                    <p>₹380</p>
                    </center>
                </div>
                <div class="top1">
                <center>
                    <img src="Images/chicken chap.jpg" alt="">
                    <hr>
                    <h6>Chicken Chap</h6>
                    <p>₹300</p>
                    </center>
                </div>
                <div class="top1">
                <center>
                    <img src="Images/chicken tikka.jpg" alt="">
                    <hr>
                    <h6>Chicken Tikka</h6>
                    <p>₹290</p>
                    </center>
                </div>
            </div>

        </div>
    </center>



    <center>
    <div class="div4">
        <p class="div4_p">Feedback about our serve</p> <br>
        <a href="#comment"><button type="submit" name="comment" >Comment</button></a> <br> <br>
        <p style="font-size:15px"><u>CABRA CEVICHERIA</u> <u>BOKA RESTAURANT GROUP</u> <u>LITTLE GOAT DINER</u>  <u>DUCK DUCK GOAT</u>  <u>GOAT GROUP CATERING</u>  <u>BAOBING  SUGARGOAT</u>  </p> <br> <br>
        <p>© 2022 Boka Restaurant Group, Inc. All Rights Reserved | <u>Accessibility</u>  | <u>Privacy Policy</u>  | <u>Site Map</u> | <u>Employment</u></p>
    </div>
    </center>


    <aside id="comment" class="popup">
        <div class="popUpContainer">
           <header>
            <a href="#!" class="closePopUp">X</a>
            <h2>Comment Section</h2>
           </header>
          <article>
            <center>
            <form action="comment.php" method="post"> 
                <br>
            <label for="">Comment :</label> <br> <br>
            <textarea name="cmnts" id="" cols="40" rows="6" ></textarea> <br>
            <!-- <label for="">Password :</label>
            <input type="password" name="ppassword"> <br> -->
            <button class="" type="submit" name="comment_button">Submit</button>
            </form> 

            <br><hr><br>

            <div class="all_cmnt">
                <h2 class="cmnt" style="color:white;">All Reviews</h2>
                <?php
                 $cmt="SELECT user_name,cmnts FROM cmnt";
                 $rslt=mysqli_query($conn,$cmt);
                 if (mysqli_num_rows($rslt) > 0) {
                     while ($row = mysqli_fetch_assoc($rslt)) {
         
                ?>
                <div class="dsply_cmnt">
                    <h3 class="cmt_name"><?php echo $row['user_name']; ?></h3>
                    
                    <p class="cmt_para"><?php echo $row['cmnts']; ?></p>
                </div>
                <?php 
                }
                }
                ?>
            </div>
            </center>
          </article>
       </div>        
       <a href="#!" class="closePopUpOutSide"></a>    
    </aside>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
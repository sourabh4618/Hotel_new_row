
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome icons link  -->
    <script src="https://kit.fontawesome.com/2147f7ce88.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- <img class="m1" src="Images/logo.png" alt=""> -->
    <img src="Images/logo.png" class="logo_img" alt="">
            <center>
            <div class="div11">
            <h1>HOTEL NEW ROW</h1>
            </div>
            </center>
            <br>
    <h2 class="title"> A Restaurant That Only Serves Delicious Food</h2> 
    <!-- THE SECRET OF A SUCCESFULL RESTAURENT IS SHARP KNIVES. -->
    <!-- Passion let us hear -->
    <center>
    <div class="div1">
        <a href="#pop"><button type="submit" name="button_login">Login</button></a>
        <h5>Don't have an account <br> <a href="#popUp" >Sign Up</a></h5>
        <a href="https://www.facebook.com/"><img class="m2" src="Images/facebook.png" alt=""></a>
        <a href="https://www.instagram.com/"><img class="m2" src="Images/insta.png" alt=""></a>
        <a href="https://www.twitter.com/"><img class="m2" src="Images/twitter.png" alt=""></a>
        <a href="https://www.youtube.com/"><img class="m2" src="Images/youtube.png" alt=""></a>
        <a href="https://www.linkedin.com/"><img class="m2" src="Images/linkedin.png" alt=""></a>

    </div>
    </center>


    <aside id="popUp" class="popup">
      <center>
        <div class="popUpContainer">
           <header>
            <a href="#!" class="closePopUp">X</a>
            <h2>Sign UP</h2>
           </header>
          <article>
            <center>
            <form action="register.php" method="post">
            <!-- <label for="">Username :</label>  -->
            <input type="text" placeholder="Username" name="user_name"> <br>
            <input type="email" placeholder="Email" name="email"> <br>
            <!-- <label for="">Password :</label> -->
            <input type="password" placeholder="Password" name="password"> <br>
            <button class="" type="submit" name="submit">Sign Up</button>
            </form>
            </center>
          </article>
       </div> 
       </center>       
       <a href="#!" class="closePopUpOutSide"></a>    
    </aside>


    <aside id="pop" class="popup">
      <center>
        <div class="popUpContainer">
           <header>
            <a href="#!" class="closePopUp">X</a>
            <h2>Login</h2>
           </header>
          <article>
            <center>
            <form action="login.php" method="post">
            <!-- <label for="">Username :</label>  -->
            <input type="text" placeholder="Username" name="uname"> <br>
            <!-- <label for="">Password :</label> -->
            <input type="password" placeholder="Password" name="ppassword"> <br>
            <button class="" type="submit" name="button">Login</button>
            <br>
            <h5>Forgot Password<a href="#forgot"  >Reset password</a></h5>
            </form>
            </center>
          </article>
       </div>
       </center>
       <a href="#!" class="closePopUpOutSide"></a>    
    </aside>

    <aside id="forgot" class="popup">
        <div class="popUpContainer">
           <header>
            <a href="#!" class="closePopUp">X</a>
            <h2>Reset Password</h2>
           </header>
          <article>
            <center>
            <form action="forgot_password.php" method="post">
            <!-- <label for="">Username :</label>  -->
            <input type="text" placeholder="Username" name="name"> <br>
            <input type="email" placeholder="Email" name="mail"> <br>
            <!-- <label for="">Password :</label> -->
            <input type="password" placeholder="New Password" name="password"> <br>
            <input type="password" placeholder="Confirm Password" name="cnpassword"> <br>
            <button class="" type="submit" name="forgot">Reset</button>
            </form>
            </center>
          </article>
       </div>        
       <a href="#!" class="closePopUpOutSide"></a>    
    </aside>



</body>
</html>
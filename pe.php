<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pe.css">
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
            <div class="div2">
                <h2>Private Events</h2>
                <p>Private event means a social gathering or event attended by invited guests who share a common cause, membership, business or task and have a prior established relationship. For purposes of this definition, advertisement for general public attendance or sales of tickets to the general public shall not constitute a private event</p>
                <p>Private Events is a full-service Event Planning Company dedicated to creating unforgettable events for a wide range of clients and different industries. We combine seasoned knowledge with inspiration and ingenuity, transforming venues and providing your guests with truly unique experiences. Contact us so we can start working together to plan your perfect event.</p>
                
                <div class="form-div">
                    <div class="col-1">
                        
                        <form action="boocked_seats.php" method="post">
                            <table>
                                <tr>
                                    <td colspan="2"><h2 style="font-size:31px;">Your Contact Information</h2></td>
                                    <td colspan="2"><h2 style="font-size:31px;">Your Event Details</h2></td>
                                </tr>
                                <tr>
                                    <td>First Name*</td>
                                    <td>Last Name*</td>
                                    <td colspan="2">Nature of this Event(e.g., Brithday Party or Business Dinner)</td> 
                                </tr>
                                <tr>
                                    <td><input required type="text" name="first_name"></td>
                                    <td><input required type="text" name="last_name"></td>
                                    <td colspan="2"><input style="width: 490px;" name="nature" type="text"></td>
                                </tr>
                                <tr>
                                    <td>Email Address*</td>
                                    <td></td>
                                    <td>Event Date</td>
                                <td></td>
                                </tr>
                                <tr>
                                    <td><input type="email" required name="email" id=""></td>
                                    <td></td>
                                    <td><input name="date" type="date"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>Ext.</td>
                                    <td>Start Time</td>
                                    <td>End Time</td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="phone"></td>
                                    <td><input type="number"></td>
                                    <td><input name="stime" type="time"></td>
                                    <td><input name="etime" type="time"></td>
                                </tr>
                                <tr>
                                    <td>Company</td>
                                    <td></td>
                                    <td>Number of People</td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="text" name="company"></td>
                                    <td></td>
                                    <td><input name="people" type="number"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <!-- <td><input type="Submit" name="pe1_submit"></td> -->
                                    <td></td>
                                    <td></td>
                                    <td colspan="2">Is there any additional information you want like to add?</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"><textarea name="addition" id="" cols="50" rows="10"></textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>How did you hear about us?</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><select style="height: 25px;width: 100px;" name="" id="">
                                        <option value="">Instagram</option>
                                        <option value="">facebook</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <!-- <td colspan="4" style="text-align: center;"><input name="contact_button" style="padding:10px 20px 20px 20px;background-color:rgba(0, 0, 255, 0.61);color:white;"  type="submit"></td> -->
                                    <td colspan="4" style="text-align: center;"><button name="contact_button" style="padding:10px;margin-left:50px;border-radius:10px;background-color:rgba(0, 0, 255, 0.61);color:white;" type="submit">Submit</button></td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="4" style="text-align: center;"></td>
                                </tr> -->
        
                            </table>
                        </form>
                        <br> 
                        <center>
                            <a href="bk.php"><button type="submit" style="padding:10px;border-radius:10px;background-color:rgba(0, 0, 255, 0.658);color:white;" name="contact_button">Boocked seats for private event</button></a>
                        </center>
                    </div>
                    
                </div>
                
            </div>
            <footer>
            <center>
    <div class="div4">
        <p style="font-size:15px;padding-top:60px;"><u>CABRA CEVICHERIA</u> <u>BOKA RESTAURANT GROUP</u> <u>LITTLE GOAT DINER</u>  <u>DUCK DUCK GOAT</u>  <u>GOAT GROUP CATERING</u>  <u>BAOBING  SUGARGOAT</u>  </p> <br> <br>
        <p>© 2022 Boka Restaurant Group, Inc. All Rights Reserved | <u>Accessibility</u>  | <u>Privacy Policy</u>  | <u>Site Map</u> | <u>Employment</u></p>
    </div>
    </center>
            </footer>
        </div>
        

        
</body>
</html>
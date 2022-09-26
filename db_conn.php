<?php

$sname= "sql201.epizy.com";

$unmae= "epiz_32634199";

$password = "t3ZiBAIibgE23Wc";

$db_name = "epiz_32634199_food_databse";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
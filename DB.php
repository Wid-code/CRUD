<?php

    //Defining connection with data base
    
    define("DBhost", "localhost");
    define("DBlogin", "root");
    define("DBpassword", "root");
    define("DBname", "car-dealership");

    $conn = new mysqli(DBhost, DBlogin, DBpassword, DBname);
    $conn->set_charset("utf8");

?>
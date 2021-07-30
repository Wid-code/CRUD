<?php

    //Creating query for deleting rows in DB
    require_once 'DB.php';

    $query = "DELETE FROM cars_info WHERE id=" . $_GET["id"];

    //Executing the query and closing the connection with DB
    $conn->query($query);
    $conn->close(); 

    //Heading back to the index.php
    header('Location: /');
?>
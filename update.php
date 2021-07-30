<?php

    require_once 'DB.php';

    $query = "";
    $conn->query($query);

    $conn->close(); 
    header('Location: /');
?>
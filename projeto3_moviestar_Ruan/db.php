<?php
    $dbname = "moviestar";
    $dbhost = "localhost";
    $user = "root";
    $password  = "";

    $conn = new PDO("mysql:dbname=$dbname;host=$dbhost", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


?>
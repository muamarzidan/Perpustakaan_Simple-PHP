<?php
    $servername = "localhost";
    $username = "root";
    $password = "12dbmysqlzimar34";
    $dbname = "perpustakaan";

    $conn = new mysqli($servername, $username, $password, $dbname, 3307);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
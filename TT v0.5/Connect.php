<?php
    $dbhost = "";
    $dbuser = "";
    $dbpwd = "";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpwd) or die("Connection Error");
    $dbname = "";
    mysqli_select_db($conn, $dbname) or die('Database Error');
?>

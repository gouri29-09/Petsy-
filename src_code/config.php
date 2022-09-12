<?php

    $conn = mysqli_connect("localhost","root","","petsy");

    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
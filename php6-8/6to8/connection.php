<?php
$con=mysqli_connect("localhost","root","","stud_db");
if(!$con)
    {
        die("connection failed");
    }
    echo"connected sccessfully";
?>
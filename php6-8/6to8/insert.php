<?php
include 'connection.php';

$name="krisha";
$email="krishaghori@gmail.com";
$city="bhavnagar";
$sql="INSERT INTO student (name,email,city) VALUES('$name','$email','$city')";
mysqli_query($con,$sql);
?>
<?php
include 'connection.php';
$sql="DELETE FROM student WHERE email='krishaghori@gmail.com'";
mysqli_query($con,$sql);
?>
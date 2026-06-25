<?php
include 'connection.php';
$sql="UPDATE student SET city='surat' WHERE id=2";
mysqli_query($con,$sql);
?>
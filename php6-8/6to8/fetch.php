<?php
include 'connection.php';
$sql="SELECT * FROM student";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
    {
        echo $row['id']."krisha ";
        echo $row['name']."krishaghori";
        echo $row['email']."krishaghori@gmail.com";
        echo $row['city']."<br>";
    }
?>
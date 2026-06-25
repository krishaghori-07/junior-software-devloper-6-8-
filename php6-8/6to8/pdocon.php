<?php
try{
    $db=new
    PDO("mysql:host:localhost;dbname=stud_db","root","");
    echo"connected successfully";
}
catch(PDOException $e){
    echo "connection failed:".e->getMessage();
}
?>
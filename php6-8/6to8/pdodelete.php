<?php
try{
    //create pdo connection
    $db=new
    PDO("mysql:host=localhost;dbname=stud_db","root","");
     //set error mode
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     //id to delete
     $id=5;
     //store data in an associative array
     $data=array(
        ':id'=>$id
     );
     //prepare delete query
     $statement=$db->prepare("DELETE FROM student WHERE id=:id");
     //excecute query
     $statement->execute($data);
     echo "record deleted successfully";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
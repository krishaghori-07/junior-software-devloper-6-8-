<?php
try{
    //create pdo connection
    $db=new
    PDO("mysql:host=localhost;dbname=stud_db","root","");
     //set error mode
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     //store data in an associative array
     $data=array(
        ':name'=>'amit',
        ':email'=>'amit@gmail.com',
        ':city'=>'rajkot'
     );
     //prepare sql query
     $statement=$db->prepare("INSERT INTO student(name,email,city) VALUES (:name,:email,:city)");
     //execute the query
     $statement->execute($data);
     echo "record inserted successfully";
     
}
catch(PDOException $e){
echo "connection failed:".
$e->getMessage();
}
?>
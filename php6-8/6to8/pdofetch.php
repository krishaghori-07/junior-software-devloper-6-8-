<?php
try{
     //create pdo connection
    $db=new
    PDO("mysql:host=localhost;dbname=stud_db","root","");
     //set error mode
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //id to fetch
    $id=8;

    //store data in an associative array
    $data=array(
        ':id'=>$id
    );
    //prepare select query
    $statement = $db->prepare("SELECT * FROM student WHERE id= :id");

    //execute the query
    $statement->execute($data);

    //fetch the record
    $row=$statement->fetch(PDO::FETCH_ASSOC);
     
    if($row)
    {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
    }
    else
        {
            echo"record not found.";
}
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
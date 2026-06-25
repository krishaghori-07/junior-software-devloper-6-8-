<?php
try{
    //create pdo connection
    $db=new 
    PDO("mysql:host=localhost;dbname=stud_db","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //new data
    $id=8;
    $name="joy";
    $email="joy@gmail.com";
    $city="bhavnagar";

    //store data in an associative array
    $data=array(
        ':id'=>$id,
        ':name'=>$name,
        ':email'=>$email,
        ':city'=>$city
    );
    //prepare update query
    $statment=$db->prepare("UPDATE 
    student SET name = :name, email = :email,
    city = :city WHERE id = :id ");

    //execute the query
    $statment->execute($data);

    echo "record updated sccessfully";

}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>
<?php
include 'config.php';
    $id = $_GET['id'];
    $name = $_GET ['name'];
    $age = $_GET ['age'];
    $email = $_GET ['email'];
    $city = $_GET ['city'];
    
    mysqli_query($Con, "UPDATE form_table SET name ='$name', age = $age, email = '$email', city= '$city' where id= $id");
header("location:index.php");

?>
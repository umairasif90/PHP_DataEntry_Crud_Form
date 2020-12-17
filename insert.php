<?php
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
$city = $_GET['city']; 


include 'config.php';
mysqli_query($Con, "INSERT INTO `form_table`(`name`, `age`, `email`, `city`) VALUES ('$name','$age','$email','$city')");

header("location:index.php")
?>

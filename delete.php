<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($Con, "Delete from form_table where id =$id");
header("Location: index.php");
?>
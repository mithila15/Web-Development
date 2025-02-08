<?php
include("db.php");
$id=$_GET['id'];
$query="DELETE FROM dblstudent WHERE `dblstudent`.`id` = $id";
mysqli_query($con,$query);
header("location:http://localhost/Studentform/vsf.php")

?>
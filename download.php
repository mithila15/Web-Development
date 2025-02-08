<?php

include("db.php");
$id=$_GET['sid'];
$query="select 'from dblstudent where id='$id'";

$query="SELECT * FROM `dblstudent` WHERE `dblstudent`.`id` = $id";
$data=mysqli_query($con,$query);


$row=mysqli_fetch_array($data);


$filepath="upload/".$row['picture'];

header('Content-Disposition: attachment;filename'.basename($filepath));
header('Content-Length: '.filesize($filepath));
readfile($filepath);

?>
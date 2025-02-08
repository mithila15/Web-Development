
<?php 
include("db.php");

$sname=$_POST['sname'];
$id=$_POST['id'];
$dept=$_POST['dept'];
$batch=$_POST['batch'];
$email=$_POST['email'];
$contact=$_POST['contact'];


$query="UPDATE `dblstudent` SET `sname` = '$sname', `dept` = '$dept', 
`batch` ='$batch', `email` = '$email', `contact` = '$contact' WHERE `dblstudent`.`id` = $id";

mysqli_query($con,$query);

header("location:http://localhost/Studentform/vsf.php")


?>
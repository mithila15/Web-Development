<?php

include("db.php");

$name=$_POST['sname'];
$id=$_POST['id'];
$dept=$_POST['dept'];
$batch=$_POST['batch'];
$email=$_POST['email'];
$contact=$_POST['contact'];


$allowedExts=array("JPG","jpg","JPEG","png");
$extension=end(explode(".", $_FILES["image"]["name"]));


$picture=$id.".".$extension;
$tmpname=$_FILES['picture'] ['tmp_name'];
$folder="upload/";

if(in_array($extension,$allowedExts))
{
move_uploaded_file($tmpname,$folder.$picture);

$query="INSERT INTO `dblstudent` (`sname`, `id`, `dept`, `batch`, `email`, `contact`,`picture`) VALUES ('$name', '$id', '$dept', '$batch', '$email', '$contact','$picture')";
mysqli_query($con,$query);
}

header("location:http://localhost/Studentform/vsf.php")


?>
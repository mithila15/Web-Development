<?php session_start();
$_SESSION['id']=$_POST['uid'];


include("db.php");

$id=$_POST['uid'];
$pass=$_POST['pass'];

$query="SELECT * FROM `tbluser` WHERE uid=$id";
$data=mysqli_query($con,$query);
$row =mysqli_fetch_array($data);

if($data)

{
    if($row['uid']==$id&&$row['password']==$pass)
   
    header("Location:http://localhost/Studentform/vsf.php");  
    
    else 
    header("Location:http://localhost/Studentform/adminlogin.php");

}
    
    
else
    header("Location:http://localhost/Studentform/adminlogin.php");


?>
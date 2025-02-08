<?php
session_start();

session_destroy();

header("Location:http://localhost/Studentform/adminlogin.php");


?>
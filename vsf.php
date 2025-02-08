<?php session_start();
if(isset($_SESSION['id'])==Null)
header("Location:http://localhost/Studentform/adminlogin.php");
?>

<html>
     <head>
     <title>View Registration Page</title>
	 <link rel="stylesheet" type="text/css" href="styl.css">
	 </head>
	 <body>
	 
		   <div class="header">
		        <img src="header.jpg">
				
				
		 </div>
		     </div>
<div class="menu">
	<a href="#">Home</a>
	<a href="regform.php">Registration</a>
	
	<a href="#">About</a>
	<a href="logout.php">Logout</a>
</div>

<div class= "main">
<div class= "left">
      <ul type="none">
		       <li>
		           <a href="#">Home</a>
		       </li>
			   
		       <li>
		            <a href="#">About</a>
		       </li>
	 </ul>
</div>
<div class= "right">
<?php
include("db.php");
$query="SELECT * FROM `dblstudent`";
$data=mysqli_query($con,$query);
?>
<table border="1" width="500px">
<tr>
     <th>Name</th>
     <th>Id</th>
     <th>Department</th>
     <th>Batch</th>
     <th>Email</th>
     <th>Contact Number</th>
	 <th>Picture</th>

	 <th>Action</th>
</tr>
<?php

while($row=mysqli_fetch_array($data))
{
	echo "<tr>
     <td>$row[sname]</td>
     <td>$row[id]</td>
     <td>$row[dept]</td>
     <td>$row[batch]</td>
     <td>$row[email]</td>
     <td>$row[contact]</td>
	 <td><img src=upload/$row[picture] width=20px height=20px>
	 
	 <br> <a href=download.php?sid=$row[id]>Download</a>
	 
	  </td>
	 
	 
	 
	  <td> 
	 <a href= delete.php?id=$row[id]>Delete</a>
	 <a href= updateform.php?id=$row[id] >Update</a>
	 
	 </td>
   </tr>
	";
	
}
?>
</table>

</div>


</div>

<div class="footer">
	
</div>

 
</body>

</html>
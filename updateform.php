<html>
     <head>
     <title>Update Student Information</title>
	 <link rel="stylesheet" type="text/css" href="flex.css">
	 </head>
	 <body>
	 	 
		<div class="row"> 
		   <div class="header">
		        <img src="header.jpg">
				
				
		 </div>
		     </div>
<div class="menu">
	<a href="#">Home</a>
	
	<a href="#">About</a>
</div>

<div class="row">
 <div class="columnside">
        <ul type="none">
		       <li>
		           <a href="#">Home</a>
		       </li>
			   
		       <li>
		            <a href="#">About</a>
		       </li>
	 </ul>
	 </div>
	 <div class="columnmiddle">

 <?php
include("db.php");

$id=$_GET['id'];
$query="SELECT * FROM `dblstudent` where id=$id";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);
?>

	  <h2>Update Student Information</h2>
    <form action="update.php" method="post">
        
	     Student Name: <input type="text" name="sname" value="<?php echo $row['sname'];?>"><br>
		 Student Id:<input type="text" name="id"     value="<?php echo $row['id'];?>" ><br>
		 
	   Department:<select name="dept">

          <option <?php if ($row['dept']=="CSE") echo "selected";?>>CSE</option>
		  <option <?php if ($row['dept']=="BBA") echo "selected";?>>BBA</option>
		  <option <?php if ($row['dept']=="EEE") echo "selected";?>>EEE</option>
 </select>
	 <br>
						  
		Batch:		<select name="batch">
		                  <option <?php if ($row['batch']=="58") echo "selected";?>>58</option>
						  <option <?php if ($row['batch']=="56") echo "selected";?>>56</option>
						  <option <?php if ($row['batch']=="59") echo "selected";?>>59</option>
					</select>
				    <br>		  
	Email Address:<input type="text" name="email" value="<?php echo $row['email'];?>"><br>
	Contact Number:<input type="text" name="contact" value="<?php echo $row['contact'];?>"><br>
		<input type="submit" value="Submit">
	</form>	
	</div>
</div>
 <div class="Footer">          
 <p>&copy;Mithila 2022</p> 

 </div>

</body>

</html>
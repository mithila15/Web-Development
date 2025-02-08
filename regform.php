<html>
     <head>
     <title>Registration Form</title>
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
	  <h2>Student Registration Form</h2>
    <form action="insert.php" method="post" enctype="multipart/form-data">
         Student Name:<input type="text" name="sname"><br>
		 Student Id:<input type="text" name="id"><br>
		 Department:<select name="dept">
		                  <option>CSE</option>
						  <option>BBA</option>
						  <option>EEE</option>
						  </select>
						  <br>
						  
		Batch:		<select name="batch">
		                  <option>58</option>
						  <option>56</option>
						  <option>59</option>
						  </select>
						  <br>		  
		Email Address:<input type="text" name="email"><br>
		
		Contact Number:<input type="text" name="contact"><br>
		
		
		Picture:<input type="file" name="picture"><br>
		<input type="submit" value="Submit">
	</form>	
	</div>
</div>
 <div class="Footer">          
 <p>&copy;Mithila 2022</p> 

 </div>
  header("location:http://localhost/Studentform/vsf.php")


</body>

</html>
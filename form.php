<html>
 <body>
 <h2>Student Registration Form</h2>
    <form action="insert.php" method="post">
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
		<input type="submit" value="Submit">
	</form>	
 </body>
</html>
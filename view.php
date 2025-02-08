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
   </tr>
	";
	
}
?>
</table>

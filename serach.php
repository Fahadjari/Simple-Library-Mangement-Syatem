<html>
<body>
<form  method="post">
Search <input type="text" name="search"><br>&nbsp;&nbsp;
<input type ="submit">
</form>
if($rows>0){
	
					<table>
					<tr>
				
					<th>Book code</th>
					<th>Book name</th>
					<th>Author name</th>
					<th>Cost</th>
					<th>ISBN No</th>
				</tr>
					 while($rows= mysqli_fetch_assoc($result)):
						<tr>
							<td><?=$rows['book_code']?></td>
							<td><?=$rows['book_name']?></td>
							<td><?=$rows['author_name']?></td>
							<td><?=$rows['cost']?></td>
							<td><?=$rows['isbn']?></td>
						</tr>
					</table>
					endwhile
}
					
</body>					
<html>


<?php
include "connection.php";

$search=$_POST['search']
$query= "select * from library where book_name like %'$search'%";
$result= mysqli_query($con,$query);
$rows= mysqli_fetch_assoc($result)
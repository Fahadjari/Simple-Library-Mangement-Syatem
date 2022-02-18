
<?php 
include "connection.php";
$query= "select * from library";
$result= mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
		<head> <title>Library Managment System</title>
		<style>
				body {background-color: powderblue;}
				h1 {color: #006666;}
				p {color: blue;}
				tr:hover {background-color:#1DC5C3;}
th {
  background-color:	#008080;
  color: black;
}
a:hover {
  color: #37738A;
}
    .btn {
  background-color:#1DC5C3; 
  border: none;
  color: white;
  padding: 10px 250px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
}                  
				

</style>
		</head>
		<center>
		
		<body >
			<div>		
				<h1>Library Managment System</h1>
				 
		<form method="POST"  action= "sr1.php">
	   <input type="text"  name="srch" size="70" placeholder="serch by book name or author name" >
	  <button name= "btnsrch">Search</button><br><br> 
	  

</div>
				
				<table style="width:100%"border ="1" cellpadding= "15" cellspacing= "5">				
				<tr>
				
					<th>Book code</th>
					<th>Book name</th>
					<th>Author name</th>
					<th>Cost</th>
					<th>ISBN No</th>
					<th>Action</th>
				</tr>

						<?php while($rows= mysqli_fetch_assoc($result)): ?>
						<tr>
							<td><?=$rows['book_code']?></td>
							<td><?=$rows['book_name']?></td>
							<td><?=$rows['author_name']?></td>
							<td><?=$rows['cost']?></td>
							<td><?=$rows['isbn']?></td>
							<td><a href="update.php?id=<?=$rows['book_code']?>">EDIT</a>
						<a href="delete.php?id=<?=$rows['book_code']?>">delete</a>
						</td>
						</tr>
						
						<?php endwhile?>
						
				</table><br>
				
				<button class= "btn"id= "btnadd"><a href="insert.php">Add New Book</a></button></form > <br><br>	
			</div>
			
		</center>
		
		</body>
</html>
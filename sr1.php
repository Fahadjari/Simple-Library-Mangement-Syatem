<?php
include "connection.php";?>

<html>
<head> 
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
				

</style>
</head>
<body>
<h1> Search Result </h1>
		 
<?php 
if(isset($_POST['btnsrch'])){
		
		
		$srch=$_POST['srch'];
		$query= "select * from library where book_name LIKE '$srch' ";
		
		$result = (mysqli_query($con,$query));
		
?>
		
				<table style="width:100%"border ="1" cellpadding= "15" cellspacing= "5">				
				<tr>
				
					<th>Book code</th>
					<th>Book name</th>
					<th>Author name</th>
					<th>Cost</th>
					<th>ISBN No</th>
					
				</tr>

						<?php while($rows= mysqli_fetch_assoc($result)): ?>
						<tr>
							<td><?=$rows['book_code']?></td>
							<td><?=$rows['book_name']?></td>
							<td><?=$rows['author_name']?></td>
							<td><?=$rows['cost']?></td>
							<td><?=$rows['isbn']?></td>
						</tr>
						
						<?php endwhile?>
						
				</table><br>
<?php
 }
 
 ?>

</body>
</html>



	
	
		
	
<?php 
	include"connection.php";
	$bid=$_GET['id'];
	$sql="select * from library where book_code={$bid}";
	$result=mysqli_query($con,$sql)or die("query Unsucessfull");
	if(mysqli_num_rows($result)>0)
	{
			while($rows=mysqli_fetch_assoc($result)){
	
?>
<html>
	<head><title>Book update</title>
	<style>
				body {background-color: powderblue;}
				h1 {color: #006666;}
				p {color: #006666;}
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
  padding: 10px 50px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
}  
.lbl {
  color:#E3114A;
  padding: 12px;
  font-size: 20px
  font-family: Arial, Helvetica, sans-serif;
}                
				

</style>
	</head>
	<body>
	<center>
	<h1>Book Update</h1>
	<p>_____________________________________________________________________________________</p>
	<br><br>
	<form method="POST" action="updatedb.php">
	
	<input type="hidden" name= "bcode" value="<?php echo $rows['book_code']?>"<br><br>
	<label class= "lbl">BOOk NAME</label>
	<input type="text" name= "bname" value="<?php echo $rows['book_name']?>"><br><br>
	<label class= "lbl">AUTHOR NAME</label>
	<input type="text" name= "aname" value="<?php echo $rows['author_name']?>"><br><br>
	<label class= "lbl">COST</label>
	<input type="number" name= "cost" value="<?php echo $rows['cost']?>"><br><br>
	<label class= "lbl">ISBN NO</label>
	<input type="text" name= "isbn" value="<?php echo $rows['isbn']?>"><br><br>
	<button  class= "btn" name="btnupdate">Updtae</button>
	</form>
	<?php
		}
	}
	?>
	<?php
		
	?>
	</center>
	</body>
</html>
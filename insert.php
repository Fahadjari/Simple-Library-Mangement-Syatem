<?php
	include"connection.php";
	
	
	if(isset($_POST['btnadd']))
	{
		$bcode=$_POST['bcode'];
     	$bname=$_POST['bname'];
		$aname=$_POST['aname'];
		$cost=$_POST['cost'];
		$isbn=$_POST['isbn'];
			
			// db me column name me space nai dene ki _ use kar dene ka
			
		$query="insert into library(book_code, book_name,author_name, cost,isbn) values($bcode,'$bname','$aname',$cost,'$isbn')";
		if(mysqli_query($con,$query))
		{
				header('location:http://localhost/library/index.php');
		}
		else
		{
				echo"Can't inserted";
		}
	}
?>
<html>
	<head><title>Book Registration</title>
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
	<h1>Book Registration</h1>
	<p>_____________________________________________________________________________________</p>
	<br><br>
	<form method="POST">
	<label class= "lbl">BOOK CODE</label>
	<input type="number" name= "bcode" placeholder="Enter Bcode"required><br><br>
	<label class= "lbl">BOOk NAME</label>
	<input type="text" name= "bname" placeholder="Enter book nmae"required><br><br>
	<label class= "lbl">AUTHOR NAME</label>
	<input type="text" name= "aname" placeholder="Enter author name "required><br><br>
	<label class= "lbl">COST</label>
	<input type="number" name= "cost" placeholder="Enter cost "required><br><br>
	<label class= "lbl">ISBN NO</label>
	<input type="text" name= "isbn" placeholder="Enter isbn no"required><br><br>
	<button  class= "btn" name="btnadd">ADD BOOK </button>
	</form>
	<center>
	</body>
</html>
<?php
include"connection.php";
	$bcode=$_GET['id'];
	$sql="delete from library where book_code={$bcode}";
	
	$result= mysqli_query($con,$sql)or die("can't delete");
	
	header('location:http://localhost/library/index.php');
	mysqli_close($con);
?>
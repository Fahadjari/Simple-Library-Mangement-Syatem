<?php
include "connection.php";
	$bcode=$_POST['bcode'];
	$bname=$_POST['bname'];
	$aname=$_POST['aname'];
	$cost=$_POST['cost'];
	$isbn=$_POST['isbn'];
	$sql= "update library set book_name= '{$bname}',author_name='{$aname}',cost= {$cost},isbn= '{$isbn}' where book_code={$bcode}";
	$result=mysqli_query($con,$sql)or die("query no run");
	header('location:http://localhost/library/index.php');
?> 
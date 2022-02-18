<?php 
	include "connection.php";
	if(isset($_GET['book_code']))
	{ 	
		$id = $_GET['book_code'];	
	echo "book id is:: {$id}";
	}
?>
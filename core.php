<?php 

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="tours";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die().mysqli_connect_errorno();
	}
	else
	{
		
	}

?>
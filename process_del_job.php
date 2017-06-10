<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$server="localhost";
		$user="root";
		$password="";
		$db="jobscope";
		$con=mysqli_connect($server,$user,$password,$db);
		
		$q="delete from jobs where j_id=".$_GET['id'];
		
		mysqli_query($con,$q);
		
		header("location:manage.php");	
?>
<?php
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['email'])|| empty($_POST['query']))
	{
		$msg[]="one of your field is empty";
	}

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
		$server="localhost";
		$user="root";
		$password="";
		$db="jobscope";
		$con=mysqli_connect($server,$user,$password,$db);
		
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$query=$_POST['query'];
		
		$q="insert into contact(cont_fnm,cont_email,cont_query)
		   values ('$nm','$email','$query')";
		   
		mysqli_query($con,$q)or die("wrong query");
		mysqli_close($con);
		header("location:contact.php");
	}
?>
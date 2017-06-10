<?php session_start();
	if(empty($_GET))
	{
		header("location:index.php");
	
	}
	$server="localhost";
	$user="root";
	$password="";
	$db="jobscope";
	$con=mysqli_connect($server,$user,$password,$db);
	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($con,$q) or die("wrong query");
	header("location:index.php");
	
?>
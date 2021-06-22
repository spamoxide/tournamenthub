<?php

	include 'db.php';
	$id = $_GET['id'];

	$sql = "DELETE FROM register WHERE id = $id";

	$result = mysqli_query($conn, $sql);

	if($result)
	{
		echo"<script>alert('Data was Deleted!!')</script>";

		echo"<script>location.href='cpanel.php'</script>";
	}
	else 
	{
		echo"<script>alert('Data was not Deleted!!')</script>";

		echo"<script>location.href='cpanel.php'</script>";			
	}
?>
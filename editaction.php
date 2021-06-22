<?php
	
	include 'db.php';

	$id = $_POST['id'];
	$l_nickname = $_POST['l_nickname'];
	$l_email = $_POST['l_email'];
	$l_cid = $_POST['l_cid'];
	$l_phone = $_POST['l_phone'];
	$crew = $_POST['crew'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$payment = $_POST['payment'];

	$sql = "UPDATE register SET crew = '$l_nickname', l_nickname = '$l_nickname', l_email = '$l_email', l_phone = '$l_phone', l_cid = '$l_cid', p2 = '$p2', p3 = '$p3', p4 = '$p4', payment = '$payment' where id = $id";

	$result = mysqli_query($conn, $sql);

	if($result)
	{
		echo"<script>alert('Data was Updated!!')</script>";

		echo"<script>location.href='cpanel.php'</script>";
	}
	else 
	{
		echo"<script>alert('Data was not Updated!!')</script>";

		echo"<script>location.href='cpanel.php'</script>";			
	}
?>
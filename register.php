<?php

if(empty($_POST['l_nickname'])      ||
   empty($_POST['l_email'])         ||
   empty($_POST['l_cid'])    		||
   empty($_POST['l_phone'])  		||
   empty($_POST['crew'])   			||
   empty($_POST['p2'])   			||
   empty($_POST['p3'])   			||
   empty($_POST['p4'])   			||
   !filter_var($_POST['l_email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   
   }

	$l_nickname = $_POST['l_nickname'];
	$l_email = $_POST['l_email'];
	$l_cid = $_POST['l_cid'];
	$l_phone = $_POST['l_phone'];
	$crew = $_POST['crew'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$payment = 'Not Paid';

	//$conn = new mysqli('localhost','root','','tounament');
	$conn = new mysqli('sql208.epizy.com','epiz_25953094','XzJnAQoLpM','epiz_25953094_tournament');

	$count=0;
	$res=mysqli_query($conn,"select * from register where l_cid='$_POST[l_cid]'");
	$count=mysqli_num_rows($res);

	
	if($conn->connect_error)
	{
		die('Connection Failed : '.$conn->connect_error);
	}
	else if($count>0)
	{
		header("Location:fail.html");
	}
	else
	{
		$stmt = $conn->prepare("insert into register(crew, l_nickname, l_email, l_phone, l_cid, p2, p3, p4, payment) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssss",$crew, $l_nickname, $l_email, $l_phone, $l_cid, $p2, $p3, $p4, $payment);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		header("Location:success.html");
	}
?>
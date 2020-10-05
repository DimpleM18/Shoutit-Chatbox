<?php
	include 'database.php' ;
	
	if(isset($_POST['submit'])){

	$user = mysqli_real_escape_string($con,$_POST['user']);
	$msg = mysqli_real_escape_string($con,$_POST['msg']);
	echo "hello";
	}
	
	date_default_timezone_set("Asia/Calcutta");
	$time=date('h:i:s a',time());
	
	if(!isset($user) || !isset($msg)){
			$error ="Please fill name and message";
			header("Location:index.php?error=".urlencode($error));
		
	}
	else{
		$qr="INSERT INTO shout(id,user,msg,time) values ('','$user' ,'$msg','$time') ";
			if(!mysqli_query($con,$qr)){
				die('Error'.mysqli_errno($con));
			}
			else{
			header("Location:index.php");
				exit();
			}
	}
?>
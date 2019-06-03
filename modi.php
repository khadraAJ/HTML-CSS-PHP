<?php
	require_once("conn.php");
	//deux var log et pas pour récuppérer ces champs
	//voir le nom dans html
	$log=$_POST["username"];
	$pas=md5($_POST['password']);
	
	$ps=$pdo->prepare("SELECT * FROM us WHERE LOGIN=? AND PASSWORD=?");
	
	$params=array($log, $pas);
	$ps->execute($params);
	
	if ($user=$ps->fetch()){
		header("location:paged'acceuila.php");
		session_start();
		$_SESSION['PROFILE']=$user;
	}
	else  {
		header("location:pagepublique.php");

	}
?>
	
	
	
	
	
	
	
	
	

<?php
//proteger une resource
	session_start();
	if(!(isset($_SESSION['PROFILE']))){
		header("location:pagepublique.php");
	}
?>

<?php
require_once("security.php");
?>
<?php
require_once("security.php");
?>

<?php if(!($_SESSION["PROFILE"]["ROLE"]=="ADMIN"))
{ 
header("location:paged'acceuilp.php"); 
}
?>

<html>
<head>
   <meta charset="UTF-8">
<title> GphyLink </title>
<link rel="stylesheet" href="style1.css">
</head>

<style>
body {
    background-color: grey;
}
</style>
<body>

<?php
include 'menua.php'
?>



</body>
</html>





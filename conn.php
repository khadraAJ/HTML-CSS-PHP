
<?php
try {
	$strConnection = 'mysql:host=db5000090247.hosting-data.io;dbname=dbs84931';
	$pdo = new PDO ($strConnection, 'dbu66217', '?-?BDD-Projet-01-GPhy!?/');
		
}



	Catch (PDOExpection $e) {
	$msg = 'ERREUR PDO dans ' . $e->getMessage();
	die ($msg);
	
	}

?>
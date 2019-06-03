<html>
<head>
  <?php
 ini_set("display_errors",0);error_reporting(0);
 ?>
<link rel="stylesheet" href="style1.css">
<meta charset="UTF-8">
<title> GphyLink </title>

 <style>


  table {
      margin:auto;
      z-index: 0;
      position:static;
      left:1000px;
  }
  table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
	  margin:auto;
  }
  th, td {
      padding: 20px;
      text-align: left;
	  margin:auto;
  }
  table#t01 tr:nth-child(even) {
      background-color: #eee;
	  margin:auto;
  }
  table#t01 tr:nth-child(odd) {
     background-color:#fff;
	 margin:auto;
  }
  table#t01 th {
      background-color: black;
      color: white;
	  margin:auto;
  }

</style>

</head>
<body>
<!--barre fixe de navigation gauche-->
<div class="barregauche">

  <h1 class="slogan">
  		Recherche
  		</h1>
      <form
   method="post" id="Rechercher">
  			<p>
  			<input type="text" name="Organe" id='Organe' placeholder="Personne, entreprise... "/>
  			<input type="submit" value="Rechercher" name="Rechercher" />
  			</p>
  		</form>

      <form
      method="post" id="dispo">
        <p>
		<!--changer le nom-->
		<input type="submit" value="Nombre de CDI" name="provenance" />
        </p>
      </form>

      <form
      method="post" id="dispo">
        <p>

        <input type="submit" value="Tri par Promo" name="dispo" />
        </p>
      </form>
</div>
<!--l'image du logo-->
 <img src="logo.png" class="logo" alt="lelogodegeu" height="80" width="100">
<!--barre fixe de  sponsors-->


<!--le menu-->
<div class="milieuuu">

<div class="navbar">
  <a href="#">Accueil</a>
  <a href="Etuiant.php"> Fiches étudiants</a>
    <!--<div class="dropdown"> -->
     <!-- <button class="dropbtn">  <i class="fa fa-caret-down"></i> </button> -->
      <!-- <div class="dropdown-content"> -->
        <!-- <div class="header">-->
			<a href="Entreprise.php">Entreprises</h2>
        <!-- </div> -->
        
           <a href="ContactUs.php">Contact </a>

  <li> <a href="LogOut.php"> LogOut [<?php echo((isset($_SESSION['PROFILE']))?($_SESSION['PROFILE']['LOGIN']):"")?>] </a></li>
    </div>

  </div>
<!-- le centre de la page -->





</body>
</html>

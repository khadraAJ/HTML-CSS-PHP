<html>
<head>

<meta charset="UTF-8">
<title> GphyLink </title>
  <link rel="stylesheet" href="style1.css">
</head>


<style>
body {
    background-color: F0E1DA;
}
</style>

<body>
  <?php include 'internpublique.php' ?>

<div class="ana">
<div class="intern">

<h1 class="slogan"> LinkedIn - GPHY </h1>
       <h2 class="form-signin-heading">Connectez vous</h2>

	   
	   

	 <form class="form-signin" method="post" action="authentification.php">
      

	<div class="input-group">		
	
	
		<label class="input-group-addon" id="basic-addon1">Nom d'utilisateur : </label>
		<input type="text" name="username" class="form-control" placeholder="Pseudo" />	
        <label class="input-group-addon" id="basic-addon1">Mot de passe : </label>
		
		<!-- pour changer le par défaut de bootstrap-->
		<input class="form-control" type="password" required=""  placeholder="Mot de passe" name="password" id="inputPassword"  oninvalid="this.setCustomValidity('Veuillez  saisir votre mot de passe')" oninput="setCustomValidity('')"> </input>
	     
       <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter	</button>
	
	
	
	</div>

	</form>















<h1> Information : </h1>

<p>Cette plateforme, créee par Abdi Jibril Khadra, El Mesbahi Idriss et Moughit Yousra, vous permettra de gérer les données des anciens étudiants GPHY. L'ensemble des informations est obtenu grâce à une analyse des comptes LinkedIn. </p>

 </br>
 <p>ATTENTION ! Cette plateforme n'est accessible qu'au personnel GPHY. Ainsi, l'utilisateur responsable de chaque modification est enregistré.</p>


</body>

</html>

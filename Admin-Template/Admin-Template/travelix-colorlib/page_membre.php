<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

	$l= $_SESSION['l'];
	$p= $_SESSION['p'];
	$telephone=$_SESSION['numero'];
	$nom=$_SESSION['nom'];
	$prenom=$_SESSION['prenom'];
	$email=$_SESSION['email']; //<br/> Identifiant de la session est :'.session_id().'</br>'; 

	echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

 
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form" name="form" method="POST" action="#">
  <p>nom :
    <input type="text" name="nom" id="nom"  value="<?php if(isset($nom)){echo $nom;}?>" required />
  </p>
  <p>prenon : 
    <input type="text" name="prenom" id="prenom" value="<?php if(isset($prenom)){echo $prenom;}?>"  required/>
  </p>

   <p>email :
    <input type="text" name="email" id="email"  value="<?php if(isset($email)){echo $email;}?>" required />
  </p>
  <p>numero : 
    <input type="text" name="telephone" id="telephone" value="<?php if(isset($telephone)){echo $telephone;}?>" required/>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Valider" />
  </p>
</form>
</body>
</html>
<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';

$conn=config::getConnexion();
$user=new User($_POST['login'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['login']==$_POST['login'] && $t['pwd']==$_POST['pwd']){
		
		session_start();
		$_SESSION['login']=$_POST['login'];
		$_SESSION['pwd']=$_POST['pwd'];
		$_SESSION['nom']=$t['nom'];
		$_SESSION['prenom']=$t['prenom'];
		$_SESSION['email']=$t['email'];
		$_SESSION['numero']=$t['numero'];
		header("location:index.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>
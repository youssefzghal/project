<?PHP
include "../core/hotelc.php";// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
$fav=new favorisc();
if ((isset($_GET["idcc"])) and (isset($_GET["idhh"])))
{
	$fav->supprimerfav($_GET['idcc'],$_GET["idhh"]);
	
	header('Location: favoris.php');
}
else
{
	echo "verifier";
}

?>
<?PHP
include "../entities/Vol.php";
include "../core/VolCore.php";

if (isset($_POST['ref']) and isset($_POST['datee']) and isset($_POST['temps']) and isset($_POST['depart']) and isset($_POST['destination']) and isset($_POST['compagnie'])){
if ($_POST['depart']!=$_POST['destination']) {
$vol1=new Vol($_POST['ref'],$_POST['datee'],$_POST['temps'],$_POST['depart'],$_POST['destination'],$_POST['compagnie']);
$volc=new VolCore();
$volc->addVol($vol1);
header('Location:  Vols.php');
}
else {
echo "<script> alert('Erreur : Depart et destination doivent etre differents')  </script> " ;
}

	
}else{
	echo "vérifier les champs";
}
//*/

?>
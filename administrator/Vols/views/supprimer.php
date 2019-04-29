<?PHP
include "../core/VolCore.php";
$volc=new VolCore();
if (isset($_GET["ref"])){
	$volc->deleteVol($_GET["ref"]);
	header('Location: Vols.php');
}

?>
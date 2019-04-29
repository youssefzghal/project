<?PHP
include "../core/hotelc.php";
$hotelC=new hotelc();
if (isset($_POST["id"])){
	$hotelC->supprimerhotel($_POST["id"]);
	header('Location: afficherhotel.php');
}

?>
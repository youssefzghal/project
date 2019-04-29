<?PHP
include "../core/hotelc.php";
$reservation=new reservationc();
if (isset($_POST["idres"])){
	$reservation->supprimerreservation($_POST["idres"]);
	header('Location: ajouterreservation.php');
}

?>
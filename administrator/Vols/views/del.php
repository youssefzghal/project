<?PHP
include "../core/reservationVCore.php";
$volc=new reservationVCore();
if (isset($_GET["id"])){
    $volc->deleteRVol($_GET["id"]);
    header('Location: reservation.php');
}

?>
<?php

include "../../../dbConfig/config.php";
include "../../../entities/transfert.php";
include "../../../core/transfertCore.php";

if (isset($_GET['id'])) {

    $cCore = new transfertCore();
    $liste = $cCore->confirmTransfert($_GET['id']);

}
header('location: Lliste.php');



<?PHP
include "../config.php";
class reservationVCore{


    function addreservation($reservation){
        $sql="insert into reservation (sexe,prenom,nom,dateDeNaissance,email,numeroDeTelephone,id,idVol,classe) values (:ref, :datee,:temps,:depart,:destination,:compagnie)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':ref',$vol->getRef());
            $req->bindValue(':datee',$vol->getDate());
            $req->bindValue(':temps',$vol->getTime());
            $req->bindValue(':depart',$vol->getDepart());
            $req->bindValue(':destination',$vol->getDestination());
            $req->bindValue(':compagnie',$vol->getCompagnie());

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function getAllRVols(){

        $sql="SElECT * From reservationv";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function deleteRVol($ref){
        $sql="DELETE FROM reservationv where id=:ref";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ref',$ref);
        try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function updateVol($vol,$reff){
        $sql="UPDATE vols SET ref=:ref, datee=:datee,temps=:temps,depart=:depart,destination=:destination,compagnie=:compagnie WHERE ref=:reff";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $req->bindValue(':ref',$vol->getRef());
            $req->bindValue(':datee',$vol->getDate());
            $req->bindValue(':temps',$vol->getTime());
            $req->bindValue(':depart',$vol->getDepart());
            $req->bindValue(':destination',$vol->getDestination());
            $req->bindValue(':compagnie',$vol->getCompagnie());
            $req->bindValue(':reff',$reff);


            $s=$req->execute();

            // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les données : " ;
        }

    }
    function getVol($reff){
        $sql="SELECT * from vols where ref='$reff' ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function searchVols($date,$depart,$destination){
        $sql="SELECT * from vols where (datee='$date' AND depart='$depart' AND destination='$destination' ) ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}



function nombreParAnnee($year)
{
    $sql="select count(*) from reservationv as r inner join vols as v on r.idVol=v.ref where EXTRACT(YEAR FROM v.datee) = '$year'
";
    $db = config::getConnexion();
    try
    {  $liste = $db->query($sql);
        foreach($liste as $row){ }
        return $row['count(*)'];
    }
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
}

?>
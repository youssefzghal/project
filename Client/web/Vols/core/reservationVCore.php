<?PHP
include "../config.php";
class reservationVCore{


    function addreservation($reservation)
    {
        $sql="insert into reservationv (sexe,prenom,nom,dateDeNaissance,email,numeroDeTelephone,idVol,classe) values (:sexe,:prenom,:nom,:dateDeNaissance,:email,:numeroDeTelephone,:idVol,:classe)";
        $db = config::getConnexion();
        try{

            $req=$db->prepare($sql);
            $req->bindValue(':sexe',$reservation->getSexe());
            $req->bindValue(':prenom',$reservation->getPrenom());
            $req->bindValue(':nom',$reservation->getNom());
            $req->bindValue(':dateDeNaissance',$reservation->getDateDeNaissance());
            $req->bindValue(':email',$reservation->getEmail());
            $req->bindValue(':numeroDeTelephone',$reservation->getNumeroDeTelephone());
            $req->bindValue(':idVol',$reservation->getIdVol());
            $req->bindValue(':classe',$reservation->getClasse());
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function getAllVols(){

        $sql="SElECT * From vols";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function deleteVol($ref){
        $sql="DELETE FROM vols where ref=:ref";
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

?>
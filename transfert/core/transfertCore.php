<?php


class transfertCore
{
    function addTransfert($transfert)
    {
        $sql="insert into transferts (user,  date,  temps,  adresse,  ville,  pays,  etat,  chauffeur) values ( :user, :date, :temps, :adresse, :ville, :pays, :etat, :chauffeur)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $req->bindValue(':user',$transfert->getUser());
            $req->bindValue(':date',$transfert->getDate());
            $req->bindValue(':temps',$transfert->getTemps());
            $req->bindValue(':adresse',$transfert->getAdresse());
            $req->bindValue(':ville',$transfert->getVille());
            $req->bindValue(':pays',$transfert->getPays());
            $req->bindValue(':etat',"Non confirmé");
            $req->bindValue(':chauffeur',$transfert->getChauffeur());

            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function getAllTransferts()
    {

        $sql="SElECT * From transferts";
        $db = config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function deleteTransfert($id)
    {
        $sql="DELETE FROM transferts where id='$id'";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        try
        {
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function confirmTransfert($id)
    {
        $sql="UPDATE transferts SET etat='Confirmé' WHERE id='$id'";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $req->execute();
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
        }

    }
    function searchTransfertByEtat($etat)
    {
        $sql="SELECT count(*) from transferts where etat='$etat' ";
        $db = config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function searchTransfertNotConfirmed($login)
    {
        $sql="SELECT * from transferts where etat='Non confirmé' and chauffeur='$login' ";
        $db = config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function searchTransfertConfirmedOld($login)
    {   $dateactuel = date('Y-m-d');
        $sql="SELECT * from transferts where (etat='Confirmé' and chauffeur='$login'  and date < '$dateactuel' )";
        $db = config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function searchTransfertConfirmedNext($login)
    {   $dateactuel = date('Y-m-d');
        $sql="SELECT * from transferts where (etat='Confirmé' and chauffeur='$login'  and date >= '$dateactuel' )";
        $db = config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function getOneTransferts($id)
    {
        $sql="SELECT * from transferts where id='$id' ";
        $db = config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


}
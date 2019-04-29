<?php


class reclamationchauffeurCore
{
    function addReclamationChauffeur($chauffeur)
    {
        $sql="insert into reclamationchauffeurs (chauffeur,date,message) values ( :chauffeur, :date, :message)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $req->bindValue(':chauffeur',$chauffeur->getChauffeur());
            $req->bindValue(':date',date('Y-m-d'));
            $req->bindValue(':message',$chauffeur->getMessage());

            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function getAllReclamationChauffeurs()
    {

        $sql="SElECT * From reclamationchauffeurs";
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



    function getReclamationChauffeur($id)
    {
        $sql="SELECT * from reclamationchauffeurs where id='$id' ";
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
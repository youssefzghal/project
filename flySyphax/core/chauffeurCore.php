<?php


class chauffeurCore
{
    function addChauffeur($chauffeur)
    {
        $sql="insert into chauffeurs (prenom,  nom,  sexe,  dateDeNaissance,  adresse1,  province,  adresse2,  codePostale,  ville,  pays,  cin, telephone,  login,  motDePasse, rating,photo) values ( :prenom, :nom, :sexe, :dateDeNaissance, :adresse1, :province, :adresse2, :codePostale, :ville, :pays, :cin, :telephone, :login, :motDePasse, :rating,:photo)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $req->bindValue(':prenom',$chauffeur->getPrenom());
            $req->bindValue(':nom',$chauffeur->getNom());
            $req->bindValue(':sexe',$chauffeur->getSexe());
            $req->bindValue(':dateDeNaissance',$chauffeur->getDateDeNaissance());
            $req->bindValue(':adresse1',$chauffeur->getAdresse1());
            $req->bindValue(':province',$chauffeur->getProvince());
            $req->bindValue(':adresse2',$chauffeur->getAdresse2());
            $req->bindValue(':codePostale',$chauffeur->getCodePostale());
            $req->bindValue(':ville',$chauffeur->getVille());
            $req->bindValue(':pays',$chauffeur->getPays());
            $req->bindValue(':cin',$chauffeur->getCin());
            $req->bindValue(':telephone',$chauffeur->getTelephone());
            $req->bindValue(':login',$chauffeur->getLogin());
            $req->bindValue(':motDePasse',$chauffeur->getMotDePasse());
            $req->bindValue(':rating',$chauffeur->getRating());
            $req->bindValue(':photo',$chauffeur->getPhoto());

            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function getAllChauffeurs()
    {

        $sql="SElECT * From chauffeurs";
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

    function deleteChauffeur($login)
    {
        $sql="DELETE FROM chauffeurs where login=:login";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':login',$login);
        try
        {
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function updateChauffeur($chauffeur)
    {
        $sql="UPDATE chauffeurs SET prenom=:prenom, nom=:nom,sexe=:sexe,dateDeNaissance=:dateDeNaissance,adresse1=:adresse1,province=:province,adresse2=:adresse2,codePostale=:codePostale,ville=:ville,pays=:pays,cin=:cin,telephone=:telephone,motDePasse=:motDePasse,photo=:photo WHERE login=:login";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $req->bindValue(':prenom',$chauffeur->getPrenom());
            $req->bindValue(':nom',$chauffeur->getNom());
            $req->bindValue(':sexe',$chauffeur->getSexe());
            $req->bindValue(':dateDeNaissance',$chauffeur->getDateDeNaissance());
            $req->bindValue(':adresse1',$chauffeur->getAdresse1());
            $req->bindValue(':province',$chauffeur->getProvince());
            $req->bindValue(':adresse2',$chauffeur->getAdresse2());
            $req->bindValue(':codePostale',$chauffeur->getCodePostale());
            $req->bindValue(':ville',$chauffeur->getVille());
            $req->bindValue(':pays',$chauffeur->getPays());
            $req->bindValue(':cin',$chauffeur->getCin());
            $req->bindValue(':login',$chauffeur->getLogin());
            $req->bindValue(':telephone',$chauffeur->getTelephone());
            $req->bindValue(':motDePasse',$chauffeur->getMotDePasse());
            $req->bindValue(':photo',$chauffeur->getPhoto());


            $req->execute();
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
        }

    }
    function getChauffeur($login)
    {
        $sql="SELECT * from chauffeurs where login='$login' ";
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

    function searchChauffeurBySexe($sexe)
    {
        $sql="SELECT count(*) from chauffeurs where sexe='$sexe' ";
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

    function searchChauffeurByZone($ville,$pays)
    {
        $sql="SELECT * from chauffeurs where pays='$pays' and ville='$ville'";
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
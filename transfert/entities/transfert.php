<?php


namespace chauffeur;


class transfert
{
    private $id;
    private $user;
    private $date;
    private $temps;
    private $adresse;
    private $ville;
    private $pays;
    private $etat;
    private $chauffeur;


    public function __construct($id, $user, $date, $temps, $adresse, $ville, $pays, $etat,$chauffeur)
    {
        $this->id = $id;
        $this->user = $user;
        $this->date = $date;
        $this->temps = $temps;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->etat = $etat;
        $this->chauffeur = $chauffeur;
    }


    public function getChauffeur()
    {
        return $this->chauffeur;
    }


    public function setChauffeur($chauffeur)
    {
        $this->chauffeur = $chauffeur;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user)
    {
        $this->user = $user;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getTemps()
    {
        return $this->temps;
    }


    public function setTemps($temps)
    {
        $this->temps = $temps;
    }


    public function getAdresse()
    {
        return $this->adresse;
    }


    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }


    public function getVille()
    {
        return $this->ville;
    }


    public function setVille($ville)
    {
        $this->ville = $ville;
    }


    public function getPays()
    {
        return $this->pays;
    }


    public function setPays($pays)
    {
        $this->pays = $pays;
    }


    public function getEtat()
    {
        return $this->etat;
    }


    public function setEtat($etat)
    {
        $this->etat = $etat;
    }


}
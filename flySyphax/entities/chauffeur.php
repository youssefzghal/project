<?php


namespace chauffeur;


class chauffeur
{
    private $prenom;
    private $nom;
    private $sexe;
    private $dateDeNaissance;
    private $adresse1;
    private $province;
    private $adresse2;
    private $codePostale;
    private $ville;
    private $pays;
    private $cin;
    private $telephone;
    private $login;
    private $motDePasse;
    private $rating;
    private $photo;

    public function __construct($prenom, $nom, $sexe, $dateDeNaissance, $adresse1, $province, $adresse2, $codePostale, $ville, $pays, $cin, $telephone, $login, $motDePasse, $rating, $photo)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->adresse1 = $adresse1;
        $this->province = $province;
        $this->adresse2 = $adresse2;
        $this->codePostale = $codePostale;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->cin = $cin;
        $this->telephone = $telephone;
        $this->login = $login;
        $this->motDePasse = $motDePasse;
        $this->rating= $rating;
        $this->photo= $photo;
    }


    public function getPhoto()
    {
        return $this->photo;
    }


    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }


    public function getRating()
    {
        return $this->rating;
    }


    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    public function getAdresse1()
    {
        return $this->adresse1;
    }

    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function setProvince($province)
    {
        $this->province = $province;
    }

    public function getAdresse2()
    {
        return $this->adresse2;
    }

    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;
    }

    public function getCodePostale()
    {
        return $this->codePostale;
    }

    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
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

    public function getCin()
    {
        return $this->cin;
    }

    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }


}
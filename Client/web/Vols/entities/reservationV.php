<?PHP
class RVol{
    private $sexe;
    private $prenom;
    private $nom;
    private $dateDeNaissance;
    private $email;
    private $numeroDeTelephone;
    private $id;
    private $idVol;
    private $classe;

    function __construct($sexe,$prenom,$nom,$dateDeNaissance,$email,$numeroDeTelephone,$id,$idVol,$classe){
        $this->sexe=$sexe;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->dateDeNaissance=$dateDeNaissance;
        $this->email=$email;
        $this->numeroDeTelephone=$numeroDeTelephone;
        $this->id=$id;
        $this->idVol=$idVol;
        $this->classe=$classe;
    }


    public function getSexe()
    {
        return $this->sexe;
    }


    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
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


    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getNumeroDeTelephone()
    {
        return $this->numeroDeTelephone;
    }


    public function setNumeroDeTelephone($numeroDeTelephone)
    {
        $this->numeroDeTelephone = $numeroDeTelephone;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdVol()
    {
        return $this->idVol;
    }


    public function setIdVol($idVol)
    {
        $this->idVol = $idVol;
    }


    public function getClasse()
    {
        return $this->classe;
    }



    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

}

?>
<?PHP
class chauffeur{
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
	private $login;
	private $motDePasse;
	
	
	function __construct($prenom,$nom,$sexe,$dateDeNaissance,$adresse1,$province,$adresse2,$codePostale,
	$ville,$pays,$cin,$login,$motDePasse){
	  
   	   $this->prenom  
	   $this->nom  
	   $this->sexe  
	   $this->dateDeNaissance  
	   $this->adresse1  
	   $this->province  
	   $this->adresse2  
	   $this->codePostale  
	   $this->ville  
	   $this->pays  
	   $this->cin  
	   $this->login  
	   $this->motDePasse  	   
		
	}
	
	function getRef(){
		return $this->ref;
	}
	function getDate(){
		return $this->datee;
	}
	function getTime(){
		return $this->temps;
	}
	function getDepart(){
		return $this->depart;
	}
	function getDestination(){
		return $this->destination;
	}
	function getCompagnie(){
		return $this->compagnie;
	}

	
	
	//setters
	function setRef($ref){
		$this->ref=$ref; 
	}
	function setDate(){
	    $this->datee=$datee;
	}
	function setTime(){
		$this->temps=$temps;
	}
	function setDepart(){
		$this->depart=$depart;
	}
	function setDestination(){
		$this->destination=$destination;
	}
	function setCompagnie(){
		$this->compagnie=$compagnie;
	}

	 
	
}

?>
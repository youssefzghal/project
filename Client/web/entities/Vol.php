<?PHP
class Vol{
	private $ref;
	private $datee;
	private $temps;
	private $depart;
	private $destination;
	private $compagnie;
	
	function __construct($ref,$datee,$temps,$depart,$destination,$compagnie){
		$this->ref=$ref;
		$this->datee=$datee;
		$this->temps=$temps;
		$this->depart=$depart;
		$this->destination=$destination;
		$this->compagnie=$compagnie;
		
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
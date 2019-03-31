<?PHP
class hotel{
	private $id ;

       private $nom ; 

private $ville ; 

private $categorie ; 

  private $note  ;
 
private $review;
private $chambresdoubles  ;

private $chambrestriples;  

private $totalchambres ; 
  
private $prixdoubles  ;

private $prixtriples;  

private $image ; 

private $url;  
 private $description;
private $longitude;
private $email;
	function __construct($id ,$nom ,$ville , $categorie , $note  ,$review,$chambresdoubles, $chambrestriples, $totalchambres,     
		$prixdoubles ,$prixtriples,$image,$url,$description,$longitude,$email){
		$this->id=$id;
		$this->nom=$nom;
		$this->ville=$ville;
		$this->categorie=$categorie;
		$this->note=$note;
		$this->review=$review;
		$this->chambresdoubles=$chambresdoubles;
		$this->chambrestriples=$chambrestriples;
		$this->totalchambres=$totalchambres;
		$this->prixdoubles=$prixdoubles;
		$this->prixtriples=$prixtriples;
		$this->image=$image;
		$this->url=$url;
		$this->description=$description;
		$this->longitude=$longitude;
		$this->email=$email;


	}

	function getid(){
		return $this->id;}
	
	function getnom(){
		return $this->nom;}
               
                function getville(){

                return $this->ville;}

            
                function getcategorie(){
		return $this->categorie;}
	
                function getnote(){
		return $this->note;}

                function getreview(){
		 return $this->review;}

               function getchambresdoubles(){
		return $this->chambresdoubles;}

                function getchambrestriples(){
		return $this->chambrestriples;}

                function gettotalchambres(){
		return $this->totalchambres;}

                function getprixdoubles(){
		return $this->prixdoubles;}

                function getprixtriples(){
		return $this->prixtriples;}

                function getimage(){
		return $this->image;}

                function geturl(){
		return $this->url;}

                function getdescription(){
		return $this->description;}

                function getlongitude(){
		return $this->longitude;}

                function getemail(){
		return $this->email;}

	
	function setnom($nom){
		$this->nom=$nom;
	}
	
	
}





class reservation{
	private $idres ;

       private $nom ; 

private $prenom ; 

private $nbdouble ; 

 

private $checkin  ;

private $checkout;  

private $idhotel ; 
  
private $telephone  ;


	function __construct($idres,$nom,$prenom,$nbdouble,$checkin,$checkout,$idhotel,$telephone){
		$this->idres=$idres;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->nbdouble=$nbdouble;
		
		$this->checkin=$checkin;
		$this->checkout=$checkout;
		$this->idhotel=$idhotel;
		$this->telephone=$telephone;
		


	}

	function getidres(){
		return $this->idres;}
	
	function getnom(){
		return $this->nom;}
               
                function getprenom(){

                return $this->prenom;}

            
                function getnbdouble(){
		return $this->nbdouble;}
	
                function getcheckin(){
		return $this->checkin;}

                function getcheckout(){
		 return $this->checkout;}

               function getidhotel(){
		return $this->idhotel;}

                function gettelephone(){
		return $this->telephone;}

	
	
	}
	
	





?>
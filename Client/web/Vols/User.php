<?php 
include 'config.php';
class User{
	private $login;
    private $pwd;
	private $numero;
	private $email;
	private $nom;
	private $prenom;
    public $conn;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;

		$this->conn=config::getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getnumero()
	{
		return $this->numero;
		
	}

	 function getemail()
	{
		return $this->email;
		
	}

	function getnom()
	{
		return $this->nom;
		
	}
    


    function getprenom()
	{
		return $this->prenom;
		
	}
	public function Logedin($con,$login,$pwd)
	{
		$req="select * from client where login='$login' && pwd='$pwd'";
		$rep=config::getConnexion()->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>
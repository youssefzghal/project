<?PHP
class Vol{
    private $id;
    private $poid;
    private $idreservation;


    function __construct($id,$poid,$idreservation){
        $this->id=$id;
        $this->poid=$poid;
        $this->idreservation=$idreservation;

    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPoid()
    {
        return $this->poid;
    }


    public function setPoid($poid)
    {
        $this->poid = $poid;
    }


    public function getIdreservation()
    {
        return $this->idreservation;
    }


    public function setIdreservation($idreservation)
    {
        $this->idreservation = $idreservation;
    }
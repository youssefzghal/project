<?php



class reclamationChauffeur
{
    private $id;
    private $chauffeur;
    private $date;
    private $message;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getChauffeur()
    {
        return $this->chauffeur;
    }


    public function setChauffeur($chauffeur)
    {
        $this->chauffeur = $chauffeur;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function __construct($id, $chauffeur, $date, $message)
    {
        $this->id = $id;
        $this->chauffeur = $chauffeur;
        $this->date = $date;
        $this->message = $message;
    }


}
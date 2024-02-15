<?php
class Volieres extends Enclosure {
    
    protected $_hauteur;

    public function __construct($_id, $_name, $_status, $_numberofanimals, $_animals, $hauteur)
    {
        parent::__construct($_id, $_name, $_status, $_numberofanimals, $_animals);


        $this->_hauteur = $hauteur;
        $this->_type = "Aerienne";
    }


    public function getHauteur()
    {
       return $this->_hauteur;
    }

    public function setHauteur($hauteur)
    {
       return $this->_hauteur = $hauteur;
    }

}

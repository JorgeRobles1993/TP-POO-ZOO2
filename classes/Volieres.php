<?php
class Volieres extends Enclos {
    
    protected int $_hauteur;

    public function __construct($_id, $_name, $_status, $_numberofanimals, $_animals, $hauteur)
    {
        parent::__construct($_id, $_name, $_status, $_numberofanimals, $_animals);


        $this->_hauteur = $hauteur;
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

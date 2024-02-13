<?php
class Volieres extends Enclos {

<<<<<<< HEAD
<<<<<<< HEAD
    
    
}
=======
=======
>>>>>>> 7069b2350b1ac67563b4b58112fe46fbc683907c
    protected int $_hauteur;

    public function __construct($_id, $_name, $_type, $_status, $_numberofanimals, $_animals, $hauteur)
    {
        parent::__construct($_id, $_name, $_type, $_status, $_numberofanimals, $_animals);


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
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> 7069b2350b1ac67563b4b58112fe46fbc683907c

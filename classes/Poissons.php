<?php

class Poissons extends Animal
{

    public function __construct($_namespecies, $_weight, $_size, $_age)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);
        $this->_type = "AQUATIQUE";
    }
    

    public function sound()
    {
        echo "Bloop Bloop";
    }
}
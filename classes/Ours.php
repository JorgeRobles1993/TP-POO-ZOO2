<?php

class Ours extends Animal
{

    public function __construct($_namespecies, $_weight, $_size, $_age)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);
        $this->_type = "TERRESTRE";
    }
    

    public function sound()
    {
        echo "Grogneeeee";
    }
}
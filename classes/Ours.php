<?php

class Ours extends Animal
{

    protected string $_species;

    public function __construct($_namespecies, $_weight, $_size, $_age)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);
        $this->_type = "TERRESTRE";
        $this->_type ="Ours";
    }
    

    public function sound()
    {
        echo "Grogneeeee";
    }
}
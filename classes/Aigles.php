<?php

class Aigles extends Animal
{
    protected int $nombreAile;
    public function __construct($_namespecies, $_weight, $_size, $_age, $nombreAile)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);

        $this->nombreAile=$nombreAile;
        $this->_type = "AERIEN";
    }
    
    public function sound()
    {
        parent::sound();
        echo "Grogneeeee";
    }
}
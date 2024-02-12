<?php

class Tigre extends Animal
{
    
    public function __construct($_namespecies, $_weight, $_size, $_age)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);
        $this->type = "TERRESTRE";
    }
    
    public function sound()
    {
        echo "Grrrrrrriiiiiiii";
    }
}
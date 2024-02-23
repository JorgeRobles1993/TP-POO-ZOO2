<?php

class Ours extends Animal
{

    protected string $_species;

    public function getSpecie(){

        return $this->_species;

    }
    
    public function sound()
    {
        echo "Grogneeeee";
    }
}
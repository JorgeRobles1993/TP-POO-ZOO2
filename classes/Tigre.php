<?php

class Tigre extends Animal
{
    
    protected string $_species;

      public function getSpecie(){

        return $this->_species;

    }
    
    
    public function sound()
    {
        echo "Grrrrrrriiiiiiii";
    }


    public function getSpecies(){

       return $this->_species;
    }
}
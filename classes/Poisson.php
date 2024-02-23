<?php

class Poisson extends Animal
{
    protected string $_species;

    public function sound()
    {
        echo "Bloop Bloop";
    }

    public function getSpecies(){

        return $this->_species;
     }
}
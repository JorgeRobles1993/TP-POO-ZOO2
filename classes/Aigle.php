<?php

class Aigle extends Animal
{
    protected int $nombreAile;
    protected string $_species;
    
    public function getSpecies(){

        return $this->_species;
     }

    public function getInfos()
    {
        return parent::getInfos() . 
                "nombre aile = " . $this->nombreAile . "<br/>";
    }
}
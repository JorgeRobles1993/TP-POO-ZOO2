<?php

class Aigle extends Animal
{
    protected int $nombreAile;
    protected string $_species;
    
    public function __construct($_namespecies, $_weight, $_size, $_age, $nombreAile)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);

        $this->nombreAile=$nombreAile;
        $this->_type = "Aerienne";
        $this->_species = "Aigle";
    }
    
    public function sound()
    {
        parent::sound();
        echo "Grogneeeee";
    }


    public function getSpecies(){

        return $this->_species;
     }

    //  spécifique à la classe Aigles, on reprend les infos communes du parent et on ajoute la propriété spécifique des aigles
    //      on ne mets pas le getInfo dans Ours, Poisson ou Tigre car il n'y a pas de propriété spécifique dans ces classes
    public function getInfos()
    {
        return parent::getInfos() . 
                "nombre aile = " . $this->nombreAile . "<br/>";
    }
}
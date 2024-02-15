<?php 

class Zoo 
{
    protected $_name;
    protected $_employee;
    protected $_enclosures = [];

    public function AddEnclosure(Enclosure $_enclosure)
    {
        array_push($this->_enclosures, $_enclosure);
        //BDD : Insert Into enclosure (....) values (...)
    }

    public function GetEnclosures()
    {
        return $this->_enclosures;
        //BDD : Select * from enclosure
    }

    public function getCompatibleEnclos(Animal $newAnimal)
    { 
        // * créer un tableau vide d'enclos ($enclosCompatibles)
        $enclosCompatibles = [];

        //  * boucle sur le tableau des enclos 
        foreach ($this->_enclosures as $enclos)
        {

        //  * On teste si l'enclos n'est pas plein
        if ($enclos->getAvailable() == true) {
            
            //     * si oui, il y a de la place
            echo "il y a de la place";
            //          * si l'enclos est vide, on vérifie que le type de l'enclos = le type du nouvel animal
            if($enclos->getType() == $newAnimal->getType()){
                //             * si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
                if($enclos->getSpecies() == $newAnimal->getSpecies())
                    array_push($enclosCompatibles, $enclos);
            }
        }

        return $enclosCompatibles;
    }
    }
}


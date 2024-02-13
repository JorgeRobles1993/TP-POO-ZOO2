<?php 

class Zoo 
{
    protected $_name;
    protected $_employee;
    protected $_enclosures = [];


    public function AddEnclosure(Enclos $_enclosure)
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
        // créer un tableau vide d'enclos ($enclosCompatibles)
        $enclosCompatibles = [];

        //  boucle sur le tableau des enclos 
        foreach ($this->_enclos as $enclos)
        {


        //  On teste si l'enclos n'est pas plein
        //      si oui, il y a de la place
        if (enclos->getAvailable())
        //          si l'enclos est vide, on vérifie que le type de l'enclos = le type du nouvel animal
        //              si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
        //              si !=, l'enclos n'est pas compatible, on passe au suivant (ne rien faire, la boucle continuera toute seule)
        //          si l'enclos contient au moins 1 animal, on vérifie que l'espèce de l'animal dans l'enclos = l'espèce du nouvel animal
        //              si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
        //              si != , l'enclos n'est pas compatible, on passe au suivant (ne rien faire, la boucle continuera toute seule)
        //      si non, il est plein, on passe au suivant (ne rien faire, la boucle continuera toute seule)
        //  retour du tableau ($enclosCompatibles)




            // si le type d'annimal est égal au type d'enclos 
            if ($newAnimal->getType() == $enclos->getType())
            {
                //  Ajoute l'enclos compatible ($enclos) dans le tableau des enclos compatibles ($enclosCompatibles)
                array_push($enclosCompatibles, $enclos); 
            }
        }

        return $enclosCompatibles;
    }


}
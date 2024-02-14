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
        foreach ($this->_enclosures as $enclos)
        {


        //  *On teste si l'enclos n'est pas plein
        if ($enclos->getAvailable() == true)
        //   *si oui, il y a de la place  

        {
            echo "il y a de la place";
            //   *si l'enclos est vide, on vérifie que le type de l'enclos = le type du nouvel animal
        } 
        elseif ($enclos->getEmpty()){
            if ($enclos->getType() == $newAnimal->getType()){

            //   *si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
                    array_push($enclosCompatibles, $enclos);        
        }//              si !=, l'enclos n'est pas compatible, on passe au suivant (ne rien faire, la boucle continuera toute seule)
        else {
            echo "l'enclos n'est pas compatible";
        }
        }

        if ($enclos->getType()) {
            
        }

        
        //          si l'enclos contient au moins 1 animal, on vérifie que l'espèce de l'animal dans l'enclos = l'espèce du nouvel animal
        //              si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
        //              si != , l'enclos n'est pas compatible, on passe au suivant (ne rien faire, la boucle continuera toute seule)
        //      si non, il est plein, on passe au suivant (ne rien faire, la boucle continuera toute seule)
        //  retour du tableau ($enclosCompatibles)



        return $enclosCompatibles;
    }


}
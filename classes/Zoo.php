<?php 

class Zoo 
{
    protected $_name;
    protected $_employee;
    protected $_enclos = [];


    public function AddEnclos(Enclos $_enclos)
    {
        
    }


    public function getCompatibleEnclos(Animal $animal)
    { 
        // créer un tableau vide d'enclos ($enclosCompatibles)
        //  boucle sur la liste des enclos 
        //      teste si le type de l'enclos correspond au type de l'animal (paramètre)
        //      si oui, l'enclos est compatible
        //              teste si l'enclos n'est pas plein
        //                  s'il n'est pas plein, on peut le mettre dans la liste ($enclosCompatibles)
        //                  s'il est plein, on passe au suivant
        //      si non, on passe à l'enclos suivant
        //  retour du tableau ($enclosCompatibles)
        if ($animal->getType() == $enclos->getType())
        {
            
        }
    }


}
<?php 

class Zoo 
{
    protected $_name;
    protected $_employee;
    protected $_enclos = [];


    public function AddEnclos(Enclos $_enclos)
    {
<<<<<<< HEAD
            
=======
        
        
>>>>>>> master
    }


    public function getCompatibleEnclos(Animal $animal, Enclos $enclos)
    { 
        // créer un tableau vide d'enclos ($enclosCompatibles)
        //  boucle sur la liste des enclos 
        //      teste si le type de l'enclos correspond au type de l'animal (paramètre)
        //      si oui, l'enclos est compatible
        //              test si l'enclos n'est pas plein
        //                  s'il n'est pas plein, on peut le mettre dans la liste ($enclosCompatibles)
        //                  s'il est plein, on passe au suivant
        //      si non, on passe à l'enclos suivant
        //  retour du tableau ($enclosCompatibles)




        // si le type d'annimal est égal au type d'enclos 
        if ($animal->getType() == $enclos->getType())
        {


        }
    }


}
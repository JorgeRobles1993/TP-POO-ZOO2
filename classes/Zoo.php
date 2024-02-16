<?php 

class Zoo 
{
    protected int $_id;
    protected string $_name;
    protected int $_nbr_max_enclos = 6;
    protected $_enclosures = [];

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }    

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId(){
        return $this->_id;
    }
    public function setId($id){
        $this->_id = $id;
    }
    public function getName(){
        return $this->_name;
    }
    public function setName($name){
        $this->_name = $name;
    }
    public function getNbrMaxEnclos(){
        return $this->_nbr_max_enclos;
    }
    public function setNbrMaxEnclos($nbr_max_enclos){
        $this->_nbr_max_enclos = $nbr_max_enclos;
    }
    public function getEnclos(){
        return $this->_enclosures;
    }
    public function setEnclos($enclos){
        $this->_enclosures = $enclos;
    }
    public function addEnclos($enclos){
        // $this->enclos[] = $enclos;
        array_push($this->_enclosures, $enclos);
    }
}
    // public function AddEnclosure(Enclosure $_enclosure)
    // {
    //     array_push($this->_enclosures, $_enclosure);
    //     //BDD : Insert Into enclosure (....) values (...)
    // }

    // public function GetEnclosures()
    // {
    //     return $this->_enclosures;
    //     //BDD : Select * from enclosure
    // }

    // public function getCompatibleEnclos(Animal $newAnimal)
    // { 
    //     // * créer un tableau vide d'enclos ($enclosCompatibles)
    //     $enclosCompatibles = [];

    //     //  * boucle sur le tableau des enclos 
    //     foreach ($this->_enclosures as $enclos)
    //     {

    //     //  * On teste si l'enclos n'est pas plein
    //     if ($enclos->getAvailable() == true) {
            
    //         //     * si oui, il y a de la place
    //         echo "il y a de la place";
    //         //          * si l'enclos est vide, on vérifie que le type de l'enclos = le type du nouvel animal
    //         if($enclos->getType() == $newAnimal->getType()){
    //             //             * si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
    //             if($enclos->getSpecies() == $newAnimal->getSpecies())
    //                 array_push($enclosCompatibles, $enclos);
    //         }
    //     }

    //     return $enclosCompatibles;
    // }
    // }


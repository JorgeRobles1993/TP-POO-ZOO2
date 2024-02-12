<?php
class Enclos{

    protected $_id;
    protected $_name;
    protected $_type;
    protected $_status; // (mauvaise, correcte, bonne)
    protected $_numberofanimals;
    protected $_animals = [];

    public function __construct($id, $name, $type ,$status, $numberofanimals, $animals)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_type = $type;
        $this->_status = $status;
        $this->_numberofanimals = $numberofanimals;
        $this->_animals = $animals;

    }
    
    public function clean()
    {
        echo "Je suis nettoyé";
    }

    // public function getId()
    // {
    //     return $this->$id;
    // }


    // public function clean()
    // {
    //     echo "Je suis nettoyé";
    // }


    // public function clean()
    // {
    //     echo "Je suis nettoyé";
    // }


    // public function clean()
    // {
    //     echo "Je suis nettoyé";
    // }
}
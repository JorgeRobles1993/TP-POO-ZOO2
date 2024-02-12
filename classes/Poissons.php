<?php

class Poissons extends Animal
{

    public function __construct($_namespecies, $_weight, $_size, $_age, $_sound)
    {
           $this->_namespecies = $_namespecies;
           $this->_weight = $_weight;
           $this->_size = $_size;
           $this->_age = $_age;
           $this->_sound = $_sound;
    }
    
}
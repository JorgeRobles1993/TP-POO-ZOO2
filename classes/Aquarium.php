<?php

class Aquarium extends Enclos
{

    protected int $_salinite;

     
    public function __construct($_id, $_name, $_status, $_numberofanimals, $_animals, $salinite)
    {
        parent::__construct($_id, $_name, $_status, $_numberofanimals, $_animals);

        $this->_salinite = $salinite;

    }

    public function getSalinite()
    {
       return $this->_salinite;
    }

    public function setSalinite($salinite)
    {
       return $this->_salinite = $salinite;
    }

}

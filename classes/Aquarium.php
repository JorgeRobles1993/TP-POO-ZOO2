<?php

class Aquarium extends Enclosure
{

    protected int $_salinite;

        // supprimer le paramètre $_type et forcer la valeur dans le constructeur (comme dans la classe Aigles)
        //  A faire dans les autres enclos (cage, voliere)
    public function __construct($_id, $_name, $_status, $_numberofanimals, $_animals, $salinite)
    {
        parent::__construct($_id, $_name, $_status, $_numberofanimals, $_animals);

        $this->_salinite = $salinite;
        $this->_type = "Aquatique";

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

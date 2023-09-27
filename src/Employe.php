<?php

namespace App;

class Employe extends Personnel
{
    public function __construct(string $nom, string $prenom, int $age, int $salaireDeBase)
    {
        parent::__construct($nom, $prenom, $age, $salaireDeBase);
    }

    public function presenter() : string
    {
        return "Je m'appelle {$this->nom} {$this->prenom} et j'ai {$this->age} ans";
    }

    /**
     * @return int
     */
    public function calculSalaire() : int
    {
        return $this->salaireDeBase;
    }
}
<?php

namespace App;

class Employe extends Personnel
{
    public function __construct(string $nom, string $prenom, int $age)
    {
        parent::__construct($nom, $prenom, $age);
    }

    public function presenter() : string
    {
        return "Je m'appelle {$this->nom} {$this->prenom} et j'ai {$this->age} ans";
    }
}
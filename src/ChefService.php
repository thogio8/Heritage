<?php

namespace App;

class ChefService extends Employe
{
    protected $service;

    public function __construct(string $nom, string $prenom, int $age, string $service)
    {
        parent::__construct($nom, $prenom, $age);
        $this->service = $service;
    }

    public function presenter() : string{
        return "Bonjour je suis {$this->prenom} {$this->nom}, j'ai {$this->age} ans et je suis le chef du service {$this->service}.";
    }
}
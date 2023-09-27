<?php

namespace App;

class ChefService extends Personnel
{
    protected string $service;

    public function __construct(string $nom, string $prenom, int $age, string $service)
    {
        parent::__construct($nom, $prenom, $age);
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    public function presenter() : string{
        return "Bonjour je suis {$this->prenom} {$this->nom}, j'ai {$this->age} ans et je suis le chef du service {$this->service}.";
    }

}
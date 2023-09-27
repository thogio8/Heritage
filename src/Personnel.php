<?php

namespace App;

abstract class Personnel
{
    protected string $nom;
    protected string $prenom;
    protected int $age;
    protected int $salaireDeBase;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param int $salaireDeBase
     */
    public function __construct(string $nom, string $prenom, int $age, int $salaireDeBase)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->salaireDeBase = $salaireDeBase;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalaireDeBase(): int
    {
        return $this->salaireDeBase;
    }

    abstract public function presenter();

    abstract public function calculSalaire();
}
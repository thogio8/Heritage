<?php

namespace App;

abstract class Personnel
{
    protected string $nom;
    protected string $prenom;
    protected int $age;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     */
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
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

    abstract public function presenter();
}
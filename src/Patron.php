<?php

namespace App;

class Patron extends Personnel
{
    protected string $voiture;
    protected int $bonus;


    public function __construct(string $nom, string $prenom, int $age, int $salaireDeBase,  string $voiture, int $bonus)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($nom, $prenom, $age, $salaireDeBase);
        $this->voiture = $voiture;
        $this->bonus = $bonus;
    }

    public function deplacer() : string  {
        return "Je me déplace en {$this->voiture}";
    }

    // Redéfinir la méthode presenter définie dans la classe Employe
    public function presenter() : string{
        return "Bonjour, je me nomme {$this->prenom} {$this->nom} et je suis le boss";
    }

    /**
     * @return int
     */
    public function calculSalaire() : int
    {
        return $this->salaireDeBase + $this->bonus;
    }
}
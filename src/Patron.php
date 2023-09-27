<?php

namespace App;

class Patron extends Personnel
{
    private string $voiture;

    public function __construct(string $nom, string $prenom, int $age, string $voiture)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($nom, $prenom, $age);
        $this->voiture = $voiture;
    }

    public function deplacer() : string  {
        return "Je me déplace en {$this->voiture}";
    }

    // Redéfinir la méthode presenter définie dans la classe Employe
    public function presenter() : string{
        return "Bonjour, je me nomme {$this->prenom} {$this->nom} et je suis le boss";
    }
}
<?php

require "./vendor/autoload.php";

use App\Employe;
use App\Patron;
use App\ChefService;

$entreprise = new \App\Entreprise("Toto", "Paris");

$employe = new Employe("Gioana", "Thomas", 20);
$employe2 = new Employe("Racine", "Esteban",20);
$patron = new Patron("Gioana", "Thomas", 20, "GT3RS");
$patron2 = new Patron("Gioana","Olivier", 50, "GT2RS");
$chefService = new ChefService("Gioana", "Thomas", 20, "Informatique");


if(!$entreprise->ajouterEmployes($employe)){
    echo "Ajout impossible => patron existant";
}
if(!$entreprise->ajouterEmployes($employe2)){
    echo "Ajout impossible => patron existant";
}
if(!$entreprise->ajouterEmployes($patron)){
    echo "Ajout impossible => patron existant";
}
if(!$entreprise->ajouterEmployes($patron2)){
    echo "Ajout impossible => patron existant";
}
if(!$entreprise->ajouterEmployes($chefService)){
    echo "Ajout impossible => patron existant";
}


echo PHP_EOL;
$entreprise->presenterEmployes();
echo PHP_EOL;

dump($entreprise->afficherEmployeParClasse());

$entreprise->ajouterEmployesCSV("personnel.csv");

dump($entreprise->afficherEmployeParClasse());
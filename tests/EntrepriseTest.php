<?php

require "./vendor/autoload.php";

use App\Employe;
use App\Patron;
use App\ChefService;

$entreprise = new \App\Entreprise("Toto", "Paris");

$employe = new Employe("Gioana", "Thomas", 20, 1500);
$employe2 = new Employe("Racine", "Esteban",20, 1800);
$patron = new Patron("Toto", "Thomas", 20, 3000, "RS6", 200);
$patron2 = new Patron("Tata","Olivier", 50, 5000, "GT3RS", 105);
$chefService = new ChefService("Zaza", "Thomas", 20, 2000, "Informatique");


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

dump($entreprise->afficherSalairePersonnel());
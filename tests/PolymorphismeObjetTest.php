<?php

use App\Personnel;
use App\Employe;
use App\Patron;
use App\ChefService;

require "./vendor/autoload.php";

function test(Personnel $employe) : void{
    if($employe instanceof Employe){
        echo "Est un objet de la classe Employe";
        echo PHP_EOL;
    }
    if($employe instanceof Patron){
        echo "Est un objet de la classe Patron";
        echo PHP_EOL;
    }
    if($employe instanceof ChefService){
        echo "Est un objet de la classe ChefService";
        echo PHP_EOL;
    }
}

$employe = new Employe("Gioana", "Thomas", 20);
test($employe);
echo PHP_EOL;
$patron = new Patron("Gioana", "Thomas", 20, "GT3RS");
test($patron);
echo PHP_EOL;
$chefService = new ChefService("Gioana", "Thomas", 20, "Informatique");
test($chefService);
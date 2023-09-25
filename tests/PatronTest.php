<?php

require "vendor/autoload.php";

$patron = new \App\Patron("Gioana", "Thomas", 20, "RS6");
echo $patron->presenter(); //Appel à la méthode hérité de la classe Employé
echo PHP_EOL;
echo $patron->deplacer();
<?php

require "vendor/autoload.php";

use App\Employe;
use App\Patron;
use App\ChefService;

$employe = new Employe("Gioana", "Thomas", 20, 1200);
$patron = new Patron("Gioana", "Thomas", 20, 5000, "RS6", 2000);
$chefService = new ChefService("Gioana", "Thomas", 20, 3000, "Informatique");

echo $employe->calculSalaire().PHP_EOL;
echo $patron->calculSalaire().PHP_EOL;
echo $chefService->calculSalaire().PHP_EOL;
<?php

// Récuperer l'autoload
require "vendor/autoload.php";

$employe = new \App\Employe('Gioana', 'Thomas', 20);
echo $employe->presenter();
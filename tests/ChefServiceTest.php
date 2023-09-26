<?php

require "vendor/autoload.php";

$chefService = new \App\ChefService("Gioana", "Thomas", 20, "informatique");
echo $chefService->presenter();
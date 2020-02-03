<?php

$getal = readline("Welk getal?");
$antwoord  =1;

for($x=1; $x<$getal; $x++){
    $antwoord += $antwoord*$x;
}
echo($antwoord);
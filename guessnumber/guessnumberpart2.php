<?php

var_dump("Quel est votre nombre maximum");
$maxNumber = fgets(STDIN); // récupère l’entrée(STDIN) courante saisie par l’utilisateur et la stock dans la variable $maxNumber
// fscanf(STDIN, "%d", $maxNumber); // --> méthode avec fscanf() --> commenter le fgets pour l'utiliser
$userNumber = null;
$computerNumber = rand(0, $maxNumber);
$nbTentatives = 0;

while($userNumber != $computerNumber) {
    $nbTentatives++;
    $userNumber = fgets(STDIN); // récupère l’entrée(STDIN) courante saisie par l’utilisateur et la stock dans la variable $userNumber
    // fscanf(STDIN, "%d", $userNumber); //--> méthode avec fscanf() --> commenter le fgets pour l'utiliser
    $difference = abs($computerNumber - $userNumber);

    if ($difference > 200) {
        var_dump("tu es vraiment très loin loulou");
    }

    if ($difference > 50) {
        var_dump("tu es loin loulou");
    }

    if ($difference > 100) {
        var_dump("tu es très loin loulou");
    }

    if ($difference < 50) {
        var_dump("tu es proche loulou");
    }

    if ($difference < 25) {
        var_dump("tu es très proche loulou");
    }

    if ($difference < 10) {
        var_dump("tu es sacrément proche loulou");
    }
}

if ($userNumber == $computerNumber) {
    var_dump("tu as gagné loulou !");
    var_dump("nombre de tentative: ".$nbTentatives);
}

?>
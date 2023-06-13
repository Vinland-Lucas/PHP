<?php
$computerNumber = rand(1, 5);
// var_dump($computerNumber); // --> cela affiche les informations contenues dans la variable $computerNumber (valeur, type...)
$userNumber = null;
$nbTentatives = 0;

while ($computerNumber != $userNumber ) {
    fscanf(STDIN, "%d", $userNumber); // --> récupère l'info saisie en entrée(STDIN) par l'utilisateur et stocke la dans la variable $userNumber
    var_dump($userNumber); // --> cela affiche les informations contenues dans la variable $userNumber (valeur, type...)
    if($userNumber > $computerNumber) {
        var_dump("T'es au dessus chef redescends ! DESCENDS !");
        $nbTentatives++;
    }

    if($userNumber < $computerNumber) {
        var_dump("Mon gâté tié en dessous là ! Ressaisis-toi chef");
        $nbTentatives++;
    }
}

if($userNumber == $computerNumber) {
    var_dump("Mon gars tu m'as eu :( T'as gagné gros fdp");
    var_dump($nbTentatives); // --> cela affiche les informations contenues dans la variable $nbTentatives (valeur, type...)
}

?>
<?php

// Avec la fonction die()

/*if ($argv[1] == "add" || $argv[1] == "+") {
    var_dump($argv[2] + $argv[3]);
} elseif ($argv[1] == "sub" || $argv[1] == "-") {
    var_dump($argv[2] - $argv[3]);
} elseif ($argv[1] == "mult" || $argv[1] == "*") {
    var_dump($argv[2] * $argv[3]);
} elseif ($argv[1] == "div" || $argv[1] == "/") {
    var_dump($argv[2] / $argv[3]);
} else {
    die("unknown operation");
}*/

// Sans la fonction die()

/*if ($argv[1] == "add" || $argv[1] == "+") {
    var_dump($argv[2] + $argv[3]);
}

if ($argv[1] == "sub" || $argv[1] == "-") {
    var_dump($argv[2] - $argv[3]);
}

if ($argv[1] == "mult" || $argv[1] == "*") {
    var_dump($argv[2] * $argv[3]);
}

if ($argv[1] == "div" || $argv[1] == "/") {
    var_dump($argv[2] / $argv[3]);
}*/

// CORRECTION

$calcul = $argv[1];
$nb1 = $argv[2];
$nb2 = $argv[3];

// Méthode 1
switch ($calcul) {
    case "add":
    case "+":
        var_dump($nb1 + $nb2);
        break;

    case "sub":
    case "-":
        var_dump($nb1 - $nb2);
        break;

    case "mult":
    case "*":
        var_dump($nb1 * $nb2);
        break;

    case "div":
    case "/":
        var_dump($nb1 / $nb2);
        break;

    default:
        die("unknown operation");
}

// Méthode 2
/*switch ($calcul) {
    case ($calcul == "add" || $calcul == "+"):
        var_dump($nb1 + $nb2);
        break;

    case ($calcul == "sub" || $calcul == "-"):
        var_dump($nb1 - $nb2);
        break;

    case ($calcul == "mult" || $calcul == "*"):
        var_dump($nb1 * $nb2);
        break;

    case ($calcul == "div" || $calcul == "/"):
        var_dump($nb1 / $nb2);
        break;

    default:
        die("unknown operation");
}*/

?>
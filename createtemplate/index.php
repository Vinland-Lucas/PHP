<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="template.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require 'header.php'; ?>

    <?php
    // Si la variable/paramètre "page" existe ET qu'elle a pour valeur '' OU 'home' alors inclus le fichier 'home.php'
        if (isset($_GET['page']) && ($_GET['page'] == '') || ($_GET['page'] == 'home')) {
            include 'home.php';
        }

        if (isset($_GET['page']) && ($_GET['page'] == 'about')) {
            include 'about.php';
        }

    // Si la variable/paramètre "page" n'existe pas OU qu'elle n'a pas pour valeur '' OU 'home' OU 'about' alors affiche "404 not found".
        if (!isset($_GET['page']) || ($_GET['page'] != '') || ($_GET['page'] != 'home') || ($_GET['page'] != 'about')) {
            echo "404 not found";
        }
    ?>

    <?php require 'footer.php'; ?>
</body>
</html>
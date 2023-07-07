<?php

$host= 'localhost';
$db = 'fuel-dataviz';
$user = 'postgres';
$password = 'password'; // change to your password
$dsn = "pgsql:host=localhost;port=5432;dbname=fuel-dataviz;";
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>

<!-- 2.6 - TP Requetes SQL -->
<!---->

<!-- 1. Récupérez les stations qui possèdent le service "Vente de gaz domestique" -->
<!-- 1.a Affichez uniquement le code postal de ces stations -->
<h2>Question 1.a</h2>

<?php
$query_1a = $pdo->prepare("SELECT code_postal FROM point_de_vente
    INNER JOIN service_point_de_vente spdv ON point_de_vente.id = spdv.point_de_vente_id
    INNER JOIN service ON spdv.service_id = service.id
    WHERE service.nom = 'Vente de gaz domestique'
    LIMIT 10");
$query_1a->execute();
$code_postal = $query_1a->fetchAll();
?>

<table>
    <tr>
        <td>Code Postal</td>
    </tr>
    <?php foreach($code_postal as $data): ?>
    <tr>
        <td><?php echo $data['code_postal'] ;?></td>
    </tr>
    <?php endforeach; ?>
</table>

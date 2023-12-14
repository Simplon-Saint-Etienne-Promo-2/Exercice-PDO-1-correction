<?php
require_once('./database_connect.php');

$request = $database->query('SELECT * FROM clients 
INNER JOIN cards ON clients.cardNumber = cards.cardNumber 
WHERE cards.cardTypesId = 1');

$clientsWithFidelityCard = $request->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tous les clients avec une carte de fidélité :</h2>
    <ul>
        <?php
        foreach ($clientsWithFidelityCard as $client) {
            echo '<li>' . $client["firstName"] . ' ' . $client["lastName"] . '</li>';
        }
        ?>
    </ul>

</body>

</html>
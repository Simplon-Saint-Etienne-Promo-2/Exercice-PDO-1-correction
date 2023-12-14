<?php
require_once('./database_connect.php');

$request = $database->query('SELECT * FROM clients LEFT JOIN cards ON clients.cardNumber = cards.cardNumber');

$allClients = $request->fetchAll();

// var_dump($allClients);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
foreach($allClients as $client){
        echo (
            'Nom : ' . $client["lastName"] . '<br>' .
            'Prénom : ' . $client["firstName"] . '<br>' .
            'Date de naissance : ' . $client["birthDate"] . '<br>' .
            'Carte de fidélité : ' . ($client["cardTypesId"] === 1 ? 'Oui' : 'Non')  . '<br>' .
            'Numéro de carte : ' . $client["cardNumber"] . '<br>' .
            '<br><hr><br>'
        );
}
?>
    
</body>
</html>
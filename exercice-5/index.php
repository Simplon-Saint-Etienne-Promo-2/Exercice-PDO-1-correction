<?php
require_once('./database_connect.php');

$request = $database->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName');

$clientsWithMAsFirstLetterOfLastName = $request->fetchAll();

// var_dump($clientsWithMAsFirstLetterOfLastName);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tous les clients dont le nom commence par M:</h2>
    <ul>
    <?php
       foreach($clientsWithMAsFirstLetterOfLastName as $client){
            echo '<li>' . $client["firstName"] . ' ' . $client["lastName"] . '</li>';
       } 
    ?>
    </ul>
</body>
</html>
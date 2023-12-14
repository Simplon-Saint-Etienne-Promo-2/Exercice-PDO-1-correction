<?php
require_once('./database_connect.php');

$request = $database->query('SELECT * FROM clients LIMIT 20');
$clients = $request->fetchAll();

// var_dump($clients);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>les 20 premiers clients :</h2>
    <ol>
    <?php
       foreach($clients as $client){
            echo '<li>' . $client["firstName"] . ' ' . $client["lastName"] . '</li>';
       } 
    ?>
    </ol>
    
</body>
</html>
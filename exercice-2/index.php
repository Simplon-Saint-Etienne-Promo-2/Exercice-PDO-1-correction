<?php
require_once('./database_connect.php');

function getAllShow($database){
    $query = 'SELECT DISTINCT * FROM showtypes';
    $request = $database->query($query);

    return $request->fetchAll();

}

$shows = getAllShow($database);


// var_dump($shows);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>Tous les types de spectacles :</h2>
    <ul>
    <?php
       foreach($shows as $show){
            echo '<li>' . $show["type"] . '</li>';
       } 
    ?>
    </ul>
    
</body>
</html>
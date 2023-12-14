<?php
require_once('./database_connect.php');

$request = $database->query('SELECT * FROM shows ORDER BY title');

$shows = $request->fetchAll();

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
    
    <ul>
        <?php 
            foreach($shows as $show){
                echo '<li>' . $show["title"] . ' par ' . $show["performer"] . ' le ' . $show["date"] . ' à ' . $show["startTime"] . '</li>';
            }
        ?>
    </ul>

</body>
</html>
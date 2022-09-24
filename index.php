<?php
    require_once __DIR__ . '/allClass.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
</head>
<body>
    <main>
        <div class="container-1">    
            <?php
                foreach($list_1 as $list){
                    echo "<div class='card'>". $list[0] . "</div>";
                }
            ?>
        </div>

        <div class="container-2">
            <?php
                foreach($list_2 as $list){
                    echo "<div class='card'>". $list[0] . "</div>";
                }
            ?>     
        </div>
    </main>
</body>
</html>


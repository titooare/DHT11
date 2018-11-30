
<?php

$json_source = file_get_contents('data.txt');

$data=json_decode($json_source);


?>
<!DOCTYPE html>
<html>
    <head>

        <title>température</title>
        <link rel="stylesheet" media="screen" type="text/css" title="style"         href="main.css"/>

    </head>
    <body>
        <h1>Température</h1>

        <p>
          <?php

              echo "$json_source" ;
           ?>

        </p>


        <p> <?php
          echo "il fait ". $data->temperature." avec ". $data->humidite."% d'humidité";
            ?>
        </p>


        <div id="thermometer">
            <div id="bargraph"></div>
          </div>


    </body>

</html>

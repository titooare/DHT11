
<?php

$json_source = file_get_contents('data.txt');

$data=json_decode($json_source);

$bargraph_height = 161 + $data->temperature * 4;

$bargraph_top = 315  - $data->temperature * 4;

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
        <p>
          <?php



          $filename = 'data.txt';
          if (file_exists($filename)) {
              echo " Le  ". date ("d/m/y"." à ". "H:i:s.", filemtime($filename));
          }
          ?>

        </p>

        <div id="thermometer">
            <div id="bargraph" style="height:<?php echo $bargraph_height ; ?>px;top:<?php echo $bargraph_top ; ?>px "></div>
          </div>


    </body>

</html>

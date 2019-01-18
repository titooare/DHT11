<?php

require('CONFIG.INC.php');



    $filename_temperature= "data.txt";
    $data_json= file_get_contents("php://input");

$data = json_decode($data_json);
if (! $data){
    http_response_code(415);
    exit();
}elseif(! $data->temperature || ! $data->humidite){
    http_response_code(400);
    exit();
}










   $op= file_put_contents($filename_temperature,$data_json);
if(! $op){
    echo "store error";
}






$req = $bdd->prepare('INSERT INTO dht11(temperature,humidite) VALUES(:temperature,:humidite)');
$req->execute(array(
    'temperature' => $data->temperature,
    'humidite' => $data->humidite,
    ));

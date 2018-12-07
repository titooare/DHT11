<?php

    
    $filename_temperature= "data.txt";
    $data_json= file_get_contents("php://input");

/*$data = json_decode($data_json);
if (! $data){
    http_reponse_code(415);
    exit();
}elseif(! $data->temperature || ! $data->humidite){
    http_reponse_code(400);
    exit();
}*/










   $op= file_put_contents($filename_temperature,$data_json);
if(! $op){
    echo "store error";
}

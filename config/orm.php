<?php
function find_data(string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];
    }
    $json = file_get_contents(PATH_DB);
    $array=json_decode($json,true);
     
?>

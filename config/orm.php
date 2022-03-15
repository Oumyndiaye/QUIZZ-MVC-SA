<?php
function find_data(string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];
} 
function array_to_json(string $key,array $data){
    if (filesize(PATH_DB)==0){
        $array1 =array($data);
        $array2 = $array1;
    } 
    else{
        $old=file_get_contents(PATH_DB);
        $datac=json_decode($old,true);
       /*  $old_questions=find_data('questions'); */
        $datac[$key][]=$data;
/*         array_push($array3,$data);
 */        
/*           $data1[]=$old_questions;
 */    }
            if(!file_put_contents(PATH_DB,json_encode($datac,JSON_PRETTY_PRINT),LOCK_EX)){
                $error ="error";
            }else{
                $succes ='ok';
            }
}

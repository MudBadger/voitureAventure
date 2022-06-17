<?php

function persoIsset($array){
    if(!empty($array)){
        foreach($array as $data){
            if(!isset($data)){
                return false;
            }
        }
    } else {
        return false;
    }

    return true;
}
?>
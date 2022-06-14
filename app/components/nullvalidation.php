<?php

function nullValidator($data){
    if(is_null($data) || isset($data) || empty($data)){
        return null;
    }
}

?>
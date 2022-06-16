<?php

function queryDeleteClient($id, $rol){

    include('connection.php');

    $module = "";
    $field = "";

    switch($rol){
        case "student":
            $module = "USER";
            $field = "ID_USER";
            break;
        case "prospect":
            $module = "USER";
            $field = "ID_USER";
            break;
        case "project":
            $module = "FILES";
            $field = "ID_FILE";
            break;
        case "contract":
            $module = "FILES";
            $field = "ID_FILE";
            break;
    }

    if($query = $mysqli->query("DELETE FROM $module WHERE $field = $id")){
        $data = true;
    }else{
        $data = false;
    }

    $mysqli->close();

    return $data;
}

?>
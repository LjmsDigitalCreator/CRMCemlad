<?php

include('../model/bringInfoModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rol = $_POST['rol'];
    
    if($rol == 'prospect' || $rol == 'student'){
        echo json_encode(queryBringClientInformation($rol));
    }else if($rol == 'project' || $rol == 'contract'){
        echo json_encode(queryBringFileInformation($rol));
    }
}

?>
<?php

include('../model/deleteInfoModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    
    if($rol == 'prospect' || $rol == 'student'){
        echo json_encode(queryDeleteClient($id, $rol));
    }

}

?>
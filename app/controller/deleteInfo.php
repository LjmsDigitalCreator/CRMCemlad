<?php

include('../model/deleteInfoModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    
    echo json_encode(queryDelete($id, $rol));

}

?>
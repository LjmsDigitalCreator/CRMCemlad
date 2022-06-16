<?php

include('../model/updateInfoModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $idUser = $_POST['idUser'];
    $idCareer = $_POST['idCareer'];
    $name = $_POST['name'];
    $secondName = $_POST['secondName'];
    $lastName = $_POST['lastName'];
    $secondLastName = $_POST['secondLastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alterPhone = $_POST['alterPhone'];
    $rol = $_POST['rol'];
    
    if($rol == 'prospect' || $rol == 'student'){
        echo json_encode(queryUpdateClient(
            $idUser,
            $idCareer,
            $name,
            $secondName,
            $lastName,
            $secondLastName,
            $email,
            $phone,
            $alterPhone,
            $rol
        ));
    }

}

?>
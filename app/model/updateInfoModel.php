<?php

function queryUpdateClient(
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
){

    include('connection.php');

    if($query = $mysqli->query("UPDATE USER 
        SET ID_CAREER = $idCareer,
        NAME = '$name',
        SECOND_NAME = '$secondName',
        LAST_NAME = '$lastName',
        SECOND_LAST_NAME = '$secondLastName',
        EMAIL = '$email',
        PHONE = '$phone',
        ALTER_PHONE = '$alterPhone',
        ROL = '$rol'
        WHERE ID_USER = $idUser
    ")){
        $data = true;
    }else{
        $data = false;
    }

    $mysqli->close();

    return $data;
}

?>
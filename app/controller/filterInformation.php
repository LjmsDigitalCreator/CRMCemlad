<?php

include('../model/filterInfo.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $rol = $_POST['rol'];
    $nameLastName = $_POST['nameLastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $career = $_POST['career'];
    
    if($rol == 'prospect' || $rol == 'student'){
        echo json_encode(queryFilterClient($nameLastName, $email, $phone, $career, $rol));
    }else if($rol == 'contract' || $rol == 'project'){
        echo json_encode(queryFilterFile($nameLastName, $rol));
    }

}

?>
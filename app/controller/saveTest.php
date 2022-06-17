<?php

session_start();

include('../model/saveTestModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idUser = $_POST['idUser'];
    $values = $_POST['values'];
    $valuesNumeric = $_POST['valuesNumeric'];

    echo json_encode(querySaveTest($idUser, $values, $valuesNumeric));
         
}

?>
<?php

function queryBringClientInformation($rol){

    include('connection.php');

    $query = $mysqli->query("SELECT
        ID_USER,
        IFNULL(ID_CAREER, 1) AS ID_CAREER,
        NAME,
        IFNULL(SECOND_NAME, '') AS SECOND_NAME,
        LAST_NAME,
        IFNULL(SECOND_LAST_NAME, '') AS SECOND_LAST_NAME,
        EMAIL,
        PHONE,
        IFNULL(ALTER_PHONE, '') AS ALTER_PHONE,
        ROL
    FROM USER
    WHERE ROL = '$rol'");

    $data = array();

    while ($info = $query->fetch_object()) {
        array_push($data, [
            'ID_USER'=>$info->ID_USER,
            'ID_CAREER'=>$info->ID_CAREER,
            'NAME'=>$info->NAME,
            'SECOND_NAME'=>$info->SECOND_NAME,
            'LAST_NAME'=>$info->LAST_NAME,
            'SECOND_LAST_NAME'=>$info->SECOND_LAST_NAME,
            'EMAIL'=>$info->EMAIL,
            'PHONE'=>$info->PHONE,
            'ALTER_PHONE'=>$info->ALTER_PHONE,
            'ROL'=>$info->ROL
        ]);
    }

    $mysqli->close();

    return $data;
}

function queryBringFileInformation($type){

    include('connection.php');

    $query = $mysqli->query("SELECT
        ID_USER,
        NAME,
        DIR,
        TYPE
    FROM FILES
    WHERE TYPE = '$type'");

    $data = array();

    while ($info = $query->fetch_object()) {
        array_push($data, [
            'ID_USER'=>$info->ID_USER,
            'NAME'=>$info->NAME,
            'DIR'=>$info->DIR,
            'TYPE'=>$info->TYPE
        ]);
    }

    $mysqli->close();

    return $data;
}

?>
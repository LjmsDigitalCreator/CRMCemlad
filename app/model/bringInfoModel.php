<?php

function queryBringClientInformation($rol){

    include('connection.php');

    $query = $mysqli->query("SELECT
        USER.ID_USER,
        USER.ID_CAREER,
        CAREER.CAREER,
        USER.NAME,
        IFNULL(USER.SECOND_NAME, '') AS SECOND_NAME,
        USER.LAST_NAME,
        IFNULL(USER.SECOND_LAST_NAME, '') AS SECOND_LAST_NAME,
        USER.EMAIL,
        USER.PHONE,
        IFNULL(USER.ALTER_PHONE, '') AS ALTER_PHONE,
        ROL
    FROM USER
    INNER JOIN CAREER ON CAREER.ID_CAREER = USER.ID_CAREER
    WHERE ROL = '$rol'");

    $data = array();

    while ($info = $query->fetch_object()) {
        array_push($data, [
            'ID_USER'=>$info->ID_USER,
            'ID_CAREER'=>$info->ID_CAREER,
            'CAREER'=>$info->CAREER,
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
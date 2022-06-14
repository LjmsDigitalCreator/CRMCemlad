<?php

session_start();

function queryLogin($user, $pwd){

    include('connection.php');

    $flag = 0;

    $query = $mysqli->query("SELECT USER, PASSWORD, ROL FROM USER WHERE USER = '$user'");
    $result = $query->fetch_object();

    if($user == $result->USER && $pwd == $result->PASSWORD){
        $_SESSION['user'] = $result->USER;
        $_SESSION['rol'] = $result->ROL;        
        $flag = 1;
    }
    
    $mysqli->close();

    return $flag;
}

?>
<?php

function querySignup($information){

    include('connection.php');
    include('../components/nullvalidation.php');

    $flag = 0;

    $name = $information['name'];
    $secondname = $information['secondname'];
    $lastname = $information['lastname'];
    $secondlastname = $information['secondlastname'];
    $email = $information['email'];
    $phone = $information['phone'];
    $alterphone = $information['alterphone'];
    $career = $information['career'];
    $user = $information['user'];
    $password = $information['password'];
    $rol = $information['rol'];

    $password = md5($password);

    if($mysqli->query("INSERT INTO USER(
        ID_CAREER,
        USER,
        PASSWORD,
        NAME,
        SECOND_NAME,
        LAST_NAME,
        SECOND_LAST_NAME,
        EMAIL,
        PHONE,
        ALTER_PHONE,
        ROL
    ) VALUES(
        $career,
        '$user',
        '$password',
        '$name',
        '$secondname',
        '$lastname',
        '$secondlastname',
        '$email',
        '$phone',
        '$alterphone',
        '$rol'
    )")){
        $flag = 1;
        echo "Information inserted successfully";
    }else{
        echo("Connection failed: " . $mysqli->connect_errno);
    }
    
    $mysqli->close();

    return $flag;
}

?>
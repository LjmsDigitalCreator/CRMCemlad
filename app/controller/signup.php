<?php

include('../model/signupModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        isset($_POST['name']) && isset($_POST['secondname']) && 
        isset($_POST['lastname']) && isset($_POST['secondlastname']) && 
        isset($_POST['email']) && isset($_POST['phone']) && 
        isset($_POST['alterphone']) && isset($_POST['career']) && 
        isset($_POST['user']) && isset($_POST['password'])

    ){

        $information = array(
            "name" => ucfirst(strtolower($_POST['name'])),
            "secondname" => ucfirst(strtolower($_POST['secondname'])),
            "lastname" => ucfirst(strtolower($_POST['lastname'])),
            "secondlastname" => ucfirst(strtolower($_POST['secondlastname'])),
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
            "alterphone" => $_POST['alterphone'],
            "career" => $_POST['career'],
            "user" => $_POST['user'],
            "password" => $_POST['password'],
            "rol" => ''
        );

        $information['career'] == 1 ? $information['rol'] = 'prospect' : $information['rol'] = 'student';

        $result = querySignup($information);
        $result ? header('Location: ../../index.php') : header('Location: ../view/signup.php?failed=1');
        
    }
}

?>
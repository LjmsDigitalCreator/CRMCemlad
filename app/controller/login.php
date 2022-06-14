<?php

session_start();

include('../model/loginModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['user']) && isset($_POST['password'])){

        $user = $_POST['user'];
        $password = $_POST['password'];

        $password = md5($password);

        $result = queryLogin($user, $password);

        if($_SESSION['rol'] == 'root'){
            $result ? header('Location: ../view/awelcome.php') : header('Location: ../../index.php?failed=1');
        }else if($_SESSION['rol'] == 'student'){
            $result ? header('Location: ../view/swelcome.php') : header('Location: ../../index.php?failed=1');
        }else if($_SESSION['rol'] == 'prospect'){
            $result ? header('Location: ../view/pwelcome.php') : header('Location: ../../index.php?failed=1');   
        }
        
    }
}

?>
<?php
    function registerUploadedFile($user, $fileName,$uploadDirectory, $type){
        include('connection.php');

        if ($mysqli->query("INSERT INTO FILES (ID_USER, NAME, DIR, TYPE) VALUES ($user, '$fileName', '$uploadDirectory', '$type')")) {
            $flag = 1;
            echo "Information inserted successfully";
        }else{
            echo("Connection failed: " . $mysqli->connect_errno);
        }
        
        $mysqli->close();
    
        return $flag;

    }

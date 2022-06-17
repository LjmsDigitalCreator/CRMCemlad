<?php

session_start();

//include('../model/uploadFileModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['fileName']) && isset($_FILES['fileUpload'])){

        $fileName = $_POST['fileName'];

        $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
        $nameFile = $_FILES['fileUpload']['name'];
        $fileSize = $_FILES['fileUpload']['size'];
        $fileType = $_FILES['fileUpload']['type'];
        $fileError = $_FILES['fileUpload']['error'];
        $fileNameCmps = explode(".", $nameFile);
        $fileExtension = strtolower(end($fileNameCmps));

        $name = explode('/', $fileTmpPath);

        $newFileName = str_replace(" ", "", $nameFile  . '.' . $fileExtension);

        $allowedfileExtensions = array('zip', 'txt', 'xls', 'doc', 'docx', 'pdf', 'odt', 'rar');
        
        if (in_array($fileExtension, $allowedfileExtensions)) {
            $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . "/CRMCEMLAD/public/upload/";
            $destinyPath = $uploadFileDir . $nameFile;

            echo "<h1>". $fileTmpPath ."</h1>";
            echo "<h1>". $nameFile ."</h1>";
            echo "<h1>". $fileSize ."</h1>";
            echo "<h1>". $fileType ."</h1>";
            echo "<h1>". $fileNameCmps ."</h1>";
            echo "<h1>". $fileExtension ."</h1>";
            echo "<h1>". $newFileName ."</h1>";
            echo "<h1>". $allowedfileExtensions ."</h1>";
            echo "<h1>". $uploadFileDir ."</h1>";
            echo "<h1>". $destinyPath ."</h1>";
            echo "<h1>". $fileError ."</h1>";
            
            
            if(move_uploaded_file($fileTmpPath, $destinyPath)){
                $message = "Archivo subido con éxito";

                echo "<h1>". $message ."</h1>";
            }else{
                $message = "Error al subir el archivo " . $fileError;

                echo "<h1>". $message ."</h1>";
            }
        }

        // if($_SESSION['rol'] == 'root'){
        //     $result ? header('Location: ../view/awelcome.php') : header('Location: ../../index.php?failed=1');
        // }
        
    }
}

?>
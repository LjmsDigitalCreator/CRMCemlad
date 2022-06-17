<?php

session_start();

include('../model/uploadFileModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fileName']) && isset($_FILES['fileUpload'])) {

        $fileName = $_POST['fileName'];

        $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
        $nameFile = $_FILES['fileUpload']['name'];
        
        $fileNameCmps = explode(".", $nameFile);
        $fileExtension = strtolower(end($fileNameCmps));

        $name = explode('/', $fileTmpPath);

        $newFileName = str_replace(" ", "", $nameFile  . '.' . $fileExtension);

        $allowedfileExtensions = array('zip', 'txt', 'xls', 'doc', 'docx', 'pdf', 'odt', 'rar');

        if (in_array($fileExtension, $allowedfileExtensions)) {
            $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . "/CRMCEMLAD/public/upload/";
            $destinyPath = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destinyPath)) {
                if (registerUploadedFile($_SESSION["id"], $newFileName, $destinyPath, $_POST["type"])) {
                    if($_SESSION['rol'] == 'root'){
                        if($_POST["type"] == "project"){
                            header('Location: ../view/amodules.php?module=Gestión de proyectos&rol=project');
                        }else{
                            header('Location: ../view/amodules.php?module=Gestión de contratos&rol=contract');
                        }
                    }else if($_SESSION['rol'] == 'student'){
                        header('Location: ../view/smodules.php');
                    }
                }else{
                    if($_SESSION['rol'] == 'root'){
                        if($_POST["type"] == "project"){
                            header('Location: ../view/amodules.php?module=Gestión de proyectos&rol=project');
                        }else{
                            header('Location: ../view/amodules.php?module=Gestión de contratos&rol=contract');
                        }
                    }else if($_SESSION['rol'] == 'student'){
                        header('Location: ../view/smodules.php');
                    }
                }
            } else {
                if($_SESSION['rol'] == 'root'){
                    if($_POST["type"] == "project"){
                        header('Location: ../view/amodules.php?module=Gestión de proyectos&rol=project');
                    }else{
                        header('Location: ../view/amodules.php?module=Gestión de contratos&rol=contract');
                    }
                }else if($_SESSION['rol'] == 'student'){
                    header('Location: ../view/smodules.php');
                }
            }
        }

    }
}

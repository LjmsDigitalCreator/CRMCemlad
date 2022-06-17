<?php

session_start();

include('../model/uploadFileModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fileName']) && isset($_FILES['fileUpload'])) {

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

            if (move_uploaded_file($fileTmpPath, $destinyPath)) {
                if (registerUploadedFile($_SESSION["id"], $fileName, $uploadFileDir, $_POST["type"])) {
                    echo "file uploaded successfully";
                }
            } else {

                echo "<h1>" . $message . "</h1>";
            }
        }

        // if($_SESSION['rol'] == 'root'){
        //     $result ? header('Location: ../view/awelcome.php') : header('Location: ../../index.php?failed=1');
        // }

    }
}

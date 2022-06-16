<?php

function querySaveTest($idUser, $values){

    include('connection.php');

    for($i = 0, $j = 1; $i < count($values); $i++, $j++){
        $query = $mysqli->query("INSERT INTO TEST(
            ID_USER,
	        ID_QUESTION,
	        ANSWER
        )VALUES(
            $idUser,
            $j,
            ".$values[$i]."
        )");
    }

    $data = true;

    $mysqli->close();

    return $data;
}

?>
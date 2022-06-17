<?php

function querySaveTest($idUser, $values, $valuesNumeric){

    include('connection.php');

    $sql = "INSERT INTO TEST(
        ID_USER,
        ID_QUESTION,
        ANSWER,
        VALUE
        ) VALUES"
    ;

    for($i = 0, $j = 1; $i < count($values); $i++, $j++){

        if($j == count($values)){
            $sql .= "(
                $idUser,
                $j,
                '".$values[$i]."',
                ".$valuesNumeric[$i]."
            )";
        }else{
            $sql .= "(
                $idUser,
                $j,
                '".$values[$i]."',
                ".$valuesNumeric[$i]."
            ),";
        }
    }

    if($query = $mysqli->query($sql)){
        $data = true;
    }else{
        $data = false;
    }

    $mysqli->close();

    return $data;
}

?>
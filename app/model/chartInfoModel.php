<?php

function queryBringChartInformation(){

    include('connection.php');

    $query = $mysqli->query("SELECT
        ID_QUESTION,
        ANSWER,
        COUNT(VALUE) AS VALUE
    FROM TEST
    GROUP BY ANSWER,
        ID_QUESTION
    ORDER BY ID_QUESTION,
        ANSWER ASC;
    ");

    $data = array();

    while ($info = $query->fetch_object()) {
        array_push($data, [
            'ID_QUESTION'=>$info->ID_QUESTION,
            'ANSWER'=>$info->ANSWER,
            'VALUE'=>$info->VALUE
        ]);
    }

    $mysqli->close();

    return $data;
}

?>
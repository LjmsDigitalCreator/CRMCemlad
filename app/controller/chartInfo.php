<?php

include('../model/chartInfoModel.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo json_encode(queryBringChartInformation());
}

?>
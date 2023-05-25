<?php
    $serverName = "DESKTOP-AJKU6HA";
    $connectionOptions = array(
        "Database" => "ejemplo",
        "Uid" => "sa",
        "PWD" => "ALUMNO"
    );
    
    // Establecer la conexión
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }
?>
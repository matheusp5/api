<?php

if (isset($_GET)) {
    if (isset($_GET['username'])) {
        if (!empty($_GET['username'])) {
            $Username = addslashes($_GET['username']);
            $connection = new PDO("mysql:host=localhost;dbname=api", "root", "");
            $ApiQuery = $connection->query("SELECT * FROM `contas` WHERE `username` =  '$Username'");
            if($ApiQuery->rowCount() > 0) {
                $ApiResult = $ApiQuery->fetch();
                $ApiJson = json_encode($ApiResult);
                print_r($ApiJson);
            } else {
                echo "Usuario nao encontrado!";
            }
        } else {
            echo "Parametros invalidos ou indefinidos";
        }
    } else {
        echo "Parametros invalidos ou indefinidos";
    }
}

<?php

    function conectar(){

        $pdo = new PDO('mysql:dbhost=localhost;dbname=sistema_acompanhantes', 'root', '');
        return $pdo;
    }
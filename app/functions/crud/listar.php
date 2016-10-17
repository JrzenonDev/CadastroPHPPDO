<?php

    function listar($table){


        $pdo = conectar();

        $listar = $pdo->query("select * from $table");

        $listar->execute();

        return $listar->fetchAll(PDO::FETCH_OBJ);

    }
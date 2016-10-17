<?php

    function deletar($campo, $id, $table){

        $pdo = conectar();

        $deletar = $pdo->prepare("delete from $table where $campo = :id");

        $deletar->bindValue(":id",$id);

        return $deletar->execute();

    }
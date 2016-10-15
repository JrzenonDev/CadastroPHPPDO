<?php

    function cadastrar($table, $attributes){

        // Faz conexao com o banco
        $conn = conectar();

        // Pegar o indice do array que são o nome dos campos da tabela
        $keys = array_keys($attributes);

        // Os nomes da tabela em forma de string
        $camposTabela = implode(',', $keys);
        //dump($keys);

        // Iniciando variavel que sera usada no lopping
        $values = null;

        // Looping para pegar os valores e colocar os dois pontos na frente de cada um deles
        foreach($keys as $key){
            $values.=', :'.$key;
        }

        // Tirar os espacos em branco e retirar a primeira virgula da string
        $values = (trim(ltrim($values, ',')));

        // Prepara o SQL
        $cadastrar = $conn->prepare("insert into $table ($camposTabela) values($values)");

        // Executa o SQL dentro da funcao execute
        $cadastrar->execute($attributes);

        return $conn->lastInsertId();

    }
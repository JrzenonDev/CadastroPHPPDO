<?php

    function atualizar($id, $table, $attributes){

        // Conexao
        $pdo = conectar();

        // Inicio a variavel
        $values = null;

        // atribuir a chave do elemento corrente a variável $key a cada iteração.
        foreach($attributes as $key => $value){
            $values.= $key.'= :'.$key.',';
        }

        $values = (rtrim($values, ','));

        $atualizar = $pdo->prepare("update $table set $values where id=:id");

        $attributes['id'] = $id;

        return $atualizar->execute($attributes);

    }
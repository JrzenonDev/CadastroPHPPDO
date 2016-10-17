<?php

    if(filter_input(INPUT_GET, 'excluir', FILTER_SANITIZE_MAGIC_QUOTES) AND filter_input(INPUT_GET, 'excluir', FILTER_SANITIZE_MAGIC_QUOTES) == true){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        // Chama a funcao deletar, passando os parametros para a funcao
        $registroExcluido = deletar("id", $id, "users");

        $mensagem = ($registroExcluido) ? "Excluido com sucesso!" : "Ocorreu um erro ao excluir o registro";
    }
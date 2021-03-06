<?php

    // Mostra os erros
    ini_set('display_errors', 1);

    require 'vendor/autoload.php';

    require 'app/functions/conexao/conexao.php';
    require 'app/functions/crud/cadastrar.php';
    require 'app/functions/crud/atualizar.php';
    require 'app/functions/crud/listar.php';
    require 'app/functions/crud/deletar.php';
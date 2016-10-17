<?php

    function alterarPagina(){

        $include = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING);

        $pagina = (!is_null($include)) ? $include : 'home';

        // Includes das paginas
        $includeDaPagina = "includes/".$pagina.".php";
        $error404 = "includes/error404.php";

        require (is_file($includeDaPagina)) ? $includeDaPagina : $error404;


    }
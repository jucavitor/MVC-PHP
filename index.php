<?php

    // ROTAS / CHAMADAS DE METODOS
    require_once('./controller/clientesController.php');

    $acao =  !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller = new controlesClientes();
    $controller->{$acao}();
     
?> 
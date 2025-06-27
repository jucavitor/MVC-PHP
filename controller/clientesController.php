<?php

// CONSULTAS NO BANCO DE DADOS FICAM ESTRUTURADAS AQUI.

require_once('./models/cliente.php');

class controlesClientes {
    private $model;

    function __construct() {
        $this->model = new clienteModel();
    }

    function getAll() {
        $resultdata = $this->model->getAll();

        // Torna acessível à view
        include './views/index.php';
    }
}



?>
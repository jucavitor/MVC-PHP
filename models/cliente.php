<?php

// CONSULTAS NO BANCO DE DADOS FICAM ESTRUTURADAS AQUI, E REGRAS DE NEGOCIO.
require_once('./configuration/connect.php');

class clienteModel extends conectar{

    private $table;

    function __construct(){
     
        parent::__construct(); 
        $this->table = 'clientes';
    }
    function getAll(){
        $sqlSelect = $this->conexao->query("SELECT * FROM $this->table");
        $resultado = $sqlSelect->fetchAll();
        return $resultado;
    }
}

?>
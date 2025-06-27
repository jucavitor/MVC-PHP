<?php

// CONEXÃO COM O BANCO DE DADOS .

define('HOST','localhost');
define('DATABASENAME','MVC_PHP');
define('USERNAME','root');
define('PASSWORD','');

class conectar{
    protected $conexao;

    function __construct(){
        $this->conectarDatabase();
    }
    function conectarDatabase(){
        try{ 
            $this->conexao = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USERNAME, PASSWORD);
            //print("Conexão efetuada com sucesso!");

        }
        catch(PDOException $e){
            print("Error".$e->getMessage());
            die();
        }
    }
}

//$testeConexao = new conectar(); testa para ver se a conexão está funcionando corretamente. 

?>
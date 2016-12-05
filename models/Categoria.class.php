<?php

    require_once 'Conexao.class.php';

class Categoria{

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addCategoria($nome, $descricao){
        if($this->con->exec("INSERT INTO categoria (nome, descricao) VALUES ('{$nome}', '{$descricao}')")){
            return "Categoria cadastrada com Sucesso!";
        }
        return false;
    }

    function deleteCategoria($id){
        if ($this->con->exec("DELETE FROM categoria WHERE id = '{$id}'")) {

            return 'Categoria excluida com Sucesso!';
        }

        return FALSE;
    }

    function editeCategoria($id, $nome, $descricao){
        if($this->con->exec("UPDATE categoria SET nome = '{$nome}', descricao = '{$descricao}' WHERE id = '{$id}'")){
            return "Informações editadas com Sucesso!";
        }
        return false;
    }

    function listaCategorias(){
        $lista = $this->con->query("SELECT * FROM categoria");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;

    }


}
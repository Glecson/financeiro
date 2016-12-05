<?php

    require_once 'Conexao.class.php';

class Usuario{

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addUsuario($nome, $admissao, $mat, $perfil, $login, $senha){
        if($this->con->exec("INSERT INTO usuario (nome, admissao, matricula, perfil, login, senha) VALUES ('{$nome}', '{$admissao}', '{$mat}', '{$perfil}', '{$login}', '{$senha}')")){
            return "Usuario cadastrado com Sucesso!";
        }
        return false;
    }

    function deleteFornecedor($id){
        if ($this->con->exec("DELETE FROM usuario WHERE id = '{$id}'")) {

            return 'Usuario excluido com Sucesso!';
        }

        return FALSE;
    }

    function editeUsuario($id, $nome, $admissao, $mat, $perfil, $login, $senha){
        if($this->con->exec("UPDATE usuario SET nome = '{$nome}', admissao = '{$admissao}', matricula = '{$mat}', perfil = '{$perfil}', login = '{$login}', senha = '{$senha}' WHERE id = '{$id}'")){
            return "Informações editadas com Sucesso!";
        }
        return false;
    }

    function listaUsuarios(){
        $lista = $this->con->query("SELECT * FROM usuario");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;

    }


}
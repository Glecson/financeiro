<?php

    require_once 'Conexao.class.php';

class Fornecedor{

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addFornecedor($nome, $cnpjcpf, $telefone, $email, $end, $bairro, $cidade, $uf, $cep){
        if($this->con->exec("INSERT INTO fornecedor (nome, cnpjcpf, telefone, email, endereco, num, bairro, cidade, uf, cep) VALUES ('{$nome}', '{$cnpjcpf}', '{$telefone}', '{$email}', '{$end}', '{$bairro}', '{$cidade}', '{$uf}', '{$cep}')")){
            return "Fornecedor cadastrado com Sucesso!";
        }
        if($this->buscar($cnpjcpf)){
            return "CNPJ/CPF já Cadastrado!!";
        }
    }

    function deleteFornecedor($id){
        if ($this->con->exec("DELETE FROM fornecedor WHERE id = '{$id}'")) {

            return 'Fornecedor deletado com Sucesso!';
        }

        return FALSE;
    }

    function editeFornecedor($id, $nome, $cnpjcpf, $telefone, $email, $end, $bairro, $cidade, $uf, $cep){
        if($this->con->exec("UPDATE fornecedor SET nome = '{$nome}', cnpjcpf = '{$cnpjcpf}', telefone = '{$telefone}', email = '{$email}', endereco = '{$end}', bairro = '{$bairro}', cidade = '{$cidade}', uf = '{$uf}', cep = '{$cep}' WHERE id = '{$id}'")){
            return "Informações editadas com Sucesso!";
        }
        return false;
    }
    function listaFornecedores(){
        $lista = $this->con->query("SELECT * FROM fornecedor");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
            return false;

    }

    function buscarFornecedor($cod){
        $busca = $this->con->query("SELECT * FROM fornecedor WHERE cnpjcpf = '{$cod}'");

        if($busca->rowCount() > 0){
            return true;
        }
    }


}
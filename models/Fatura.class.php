<?php

    require_once 'Conexao.class.php';

class Fatura{

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addFatura($num, $venc, $cat, $fornec, $valor, $status){
        if($this->con->exec("INSERT INTO faturas (num,vencimento,categoria,fornecedor,valor, status) VALUES ('{$num}', '{$venc}', '{$cat}', '{$fornec}', '{$valor}', '{$status}')")){
            return true;
        }
            return false;
    }

    function deleteFatura($id){
        if ($this->con->exec("DELETE FROM faturas WHERE id = '{$id}'")) {

            return true;
        }

        return FALSE;
    }

    function editeFatura($id, $pagamento, $venc, $cat, $fornec, $valor, $desc, $pago, $status){
        if($this->con->exec("UPDATE faturas SET pagamento = '{$pagamento}', vencimento = '{$venc}', categoria = '{$cat}', fornecedor = '{$fornec}', valor = '{$valor}', desconto = '{$desc}', pago = '{$pago}', status = '{$status}' WHERE id = '{$id}'")){
            return true;
        }
        return false;
    }

    function listaFaturas(){
        $lista = $this->con->query("SELECT * FROM faturas");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
            return false;

    }

    function listaFaturasAbertas(){
        $lista = $this->con->query("SELECT * FROM faturas WHERE status = 'aberta'");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    function listarFaturasApagar(){
        $hoje = date('Y-m-d');
        $lista = $this->con->query("SELECT * FROM faturas WHERE vencimento = '{$hoje}'");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    function listarFaturasFechadas(){
        $lista = $this->con->query("SELECT * FROM faturas WHERE status = 'fechada'");

        if($lista->rowCount() > 0){

            return $lista->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    function listarFaturasEsp($valor){
        $lista = $this->con->query("SELECT * FROM faturas WHERE num LIKE '%$valor%'");

        if($lista->rowCount() > 0){
            return $lista->fetchALL(PDO::FETCH_ASSOC);
        }
    }


}
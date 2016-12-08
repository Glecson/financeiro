<?php

    require_once 'Conexao.class.php';

class Fatura{

    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addFatura($num, $lancada, $venc, $cat, $fornec, $pagar, $status){
        if($this->con->exec("INSERT INTO faturas (num,lancada,vencimento,categoria,fornecedor,valor, status) VALUES ('{$num}', '{$lancada}', '{$venc}', '{$cat}', '{$fornec}', '{$pagar}', '{$status}')")){
            return "Fatura cadastrada com Sucesso!";
        }
            return false;
    }

    function deleteFatura($id){
        if ($this->con->exec("DELETE FROM faturas WHERE id = '{$id}'")) {

            return 'Fatura deletada com Sucesso!';
        }

        return FALSE;
    }

    function editeFatura($id, $lancada, $venc, $cat, $fornec, $pagar, $desc, $pago, $status){
        if($this->con->exec("UPDATE faturas SET lancada = '{$lancada}', vencimento = '{$venc}', categoria = '{$cat}', fornecedor = '{$fornec}', valor = '{$pagar}', desconto = '{$desc}', pago = '{$pago}', status = '{$status}' WHERE id = '{$id}'")){
            return "Fatura editada com Sucesso!";
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




}
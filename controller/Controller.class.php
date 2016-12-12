<?php

class Controller{

    public $login = false;
    public $cadfatura = false;

    function login() {

        if (isset($_REQUEST['login'])) {

            $login = $_REQUEST['usuario'];
            $senha = $_REQUEST['senha'];
            $usuario = new Usuario();
            $valida = $usuario->validaAcesso($login, $senha);

            if ($valida) {
                $nome = $valida['nome'];

                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['nome'] = $nome;

                $data = date('d-m-y');
                $hora = date('H:i:s');
                $host = $_SERVER['REMOTE_ADDR'];

                $arquivo = fopen('logs/acesso.txt', 'a');

                if ($arquivo) {
                    $dados =  $data . " - " . $hora . " - " . $host . " - "  . $nome . "\r\n";
                    fwrite($arquivo, $dados);
                    fclose($arquivo);
                }
                header('Location: views/tabelas.php');
                exit;
            } else {

                $this->login = 'Usuáro/Senha incorretos!';
            }
        }

    }

    function verificaLogin(){

        if (!array_key_exists('login', $_SESSION)) {
            return FALSE;
        }
        return TRUE;
    }

    function logouf(){
        if (isset($_REQUEST['logouf'])) {

            session_start();

            if (isset($_SESSION['login'])) {
                session_destroy();

                header('Location: ../index.php');
                exit;

            }
        }
    }

    function cadFatura(){
        if(!$this->verificaLogin()){
            header('Location: ../index.php');
            exit;
        }

        if(isset($_REQUEST['salvar'])){
            $num = $_REQUEST['num'];
            $lanc = $_REQUEST['dtlanc'];
            $venc = $_REQUEST['dtvenc'];
            $cat = $_REQUEST['categ'];
            $forn = $_REQUEST['forn'];
            $valor = $_REQUEST['valor'];
            $status = $_REQUEST['status'];

            $fat = new Fatura();

            if($fat->addFatura($num, $lanc, $venc, $cat, $forn, $valor, $status)){
                $this->cadfatura = 'Fatura lançada com Sucesso!';
            }
        }
    }






}
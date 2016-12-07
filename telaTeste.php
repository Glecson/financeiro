<?php
/**
 * Created by PhpStorm.
 * User: flavio.pereira
 * Date: 05/12/2016
 * Time: 16:54
 */

require_once 'models/Conexao.class.php';
require_once 'models/Fatura.class.php';
require_once 'models/Categoria.class.php';
require_once 'models/Fornecedor.class.php';
require_once 'models/Usuario.class.php';

//Inicio Teste persistencia class Fatura
$fat = new Fatura();
$re = $fat->addFatura('222','2016/12/01','2016/12/30','material','Luiz', '400.00','fechada');
// $re = $fat->editeFatura('1','2016/12/01','2016/12/30','material','Luiz', '2000.00', '100.00', '1900.00','fachada');ok
//$re = $fat->deleteFatura('2');ok
 // $lista = $fat->listaFaturas();ok
print_r($re);
//print_r($lista);
//Fim Teste

//Inicio Teste persistencia class Categoria
//$cat = new Categoria();
//$resul = $cat->addCategoria('Construção','Materiais utilizado nas construções');ok
//$resul = $cat->editeCategoria('2','Contrução','Materiais');ok
//$resul = $cat->listaCategorias();
//$resul = $cat->deleteCategoria(2);
//print_r($resul);
//Fim Teste

//Inicio Teste persistencia class Fornecedor
//$cat = new Fornecedor();
//$resul = $cat->addFornecedor('Mario','1212122221','32226565','mario@mario.com','Rua da Rua','13','Centro','Joao Pessoa','PB', '58000000');
//$resul = $cat->editeFornecedor('1','Mario Construcoes LTDA','1212122221','32226565','mario@mario.com','Rua da Rua','13','Centro','Joao Pessoa','PB', '58000000');
//$resul = $cat->listaFornecedores();
//$resul = $cat->deleteFornecedor(1);
//print_r($resul);
//Fim Teste

//Inicio Teste persistencia class Usuario
//$cat = new Usuario();
//$resul = $cat->addUsuario('Junior','2016/12/01','1234','admin','admin','admin');
//$resul = $cat->editeUsuario('1', 'Flavio Rodrigo','2016/12/01','123456','admin','admin','admin');
//$resul = $cat->listaUsuarios();
//$resul = $cat->deleteUsuario(5);
//print_r($resul);
//Fim Teste
